<?php
namespace App\Services;

use App\Traits\ResponseTrait;
use App\Services\AuthorizationService;
use App\Services\LogService;

class QueryService {
    use ResponseTrait;

    protected $queryOrder = [];
    protected $queryPagination = [];
    protected $queryData = [];
    protected $model;
    protected $verbose;
    protected $page = false;
    protected $perPage = 10;

    protected $user;
    protected $showHigher;
    protected $showAnotherOpm; 

    protected $authorization;
    protected $log;
    public function __construct(AuthorizationService $authorization, LogService $log)
	{
        $this->authorization = $authorization;
        $this->log = $log;
    }

    public function verifyPermissions($request)
    {
        // not implemented
        $this->user = getUserByToken($request->token);       
        $showHigher = $this->authorization->hasPermission($this->user->id, 'show-higher');
        $this->showHigher = $showHigher['authorized'];
        $showAnotherOpm = $this->authorization->hasPermission($this->user->id, 'show-another-opm');
        $this->showAnotherOpm = $showAnotherOpm['authorized'];
    }

    public function query($model, $request, $noExecute=false) 
    {
        $data = $request->all();
        $verbose = $request->method();
        // $this->verifyPermissions($request);

        $this->sanitizeModel($model);
        $page = $this->sanitizePages($data);
        $this->sanitizeData($data);
        $this->verbose = $verbose;
        $query = $this->mountQuery();
        if ($noExecute) return $query;
        $execute = $this->execute($query, $page);
        return $execute;
    }

    public function sanitizeData($data) 
    {
        $ordenation = ['order_by','limit','offset'];
        $pagination = ['page','per_page'];
        $fillable = $this->model->getFillable();
        foreach ($data as $key => $value) {
            if (in_array($key, $ordenation)) array_push($this->queryOrder,[$key => $value]);
            if (in_array($key, $pagination)) array_push($this->queryPagination,[$key => $value]);
            if (in_array($this->cleanKey($key), $fillable)) $this->queryData[$key] = $value;
        }
    }

    public function sanitizeModel($model) 
    {
        // if ($model instanceof Eloquent\Builder) $this->model = $model;
        // else 
        $this->model = $model;
    }

    public function sanitizePages($data) 
    {
        if (isset($data['page'])) { 
            $this->page = $data['page']; 
            unset( $data['page']); 
        }
        if (isset($data['per_page'])) { 
            $this->perPage = $data['per_page']; 
            unset( $data['per_page']); 
        }
        if ($this->page) return (object) ['number' => $this->page, 'perPage' => $this->perPage];
        return false;
    }
    
    public function mountQuery () {
        $query = $this->model->select();
        if (count($this->queryData)) {
            foreach ($this->queryData as $key => $value) {
                if (!is_array($value) && !strpos($value, ',')) {
                    $cleanKey = $this->cleanKey($key);
                    $operator = $this->getOperator($key);
                    $cleanVal = $this->cleanValue($value);
                    $query->where($cleanKey, $operator, $cleanVal);
                }
                if ($this->verbose == 'GET' && strpos($value, ',')) {
                    $array = explode(',', $value);
                    $query->whereIn($key, $array);
                } 
                if(is_array($value)) {
                    $query->whereIn($key, $value);
                }
            }
        }

        // if (!$this->showHigher && $this->model->getPosition()) {
        //     $maxPositionShows = getMaxPositonShows($this->user->position);
        //     $query->whereIn($this->model->getPosition(), $maxPositionShows);
        // }
        // if (!$this->showAnotherOpm && $this->model->getOpm()) {
        //     $query->where($this->model->getOpm(), 'like' ,$this->user->opm_code);
        // }
        
        if (count($this->queryOrder)) {
            foreach ($this->queryOrder as $key => $value) {
                if ($key == 'limit') $query->limit((int) $value);
                if ($key == 'offset') $query->offset((int) $value);
                if ($key == 'order_by') {
                    $orderBy = $this->getOrderBy($value);
                    $query->orderBy($orderBy[0], $orderBy[1]);
                }
            }
        }

        return $query;
    }

    public function queryMounted ($query) 
    {
        $queryMounted = vsprintf(str_replace(array('?'), array('\'%s\''), $query->toSql()), $query->getBindings());
        return $queryMounted;
    }

    public function getOrderBy($val)
    {
        $array = strtoupper($this->verbose) == 'GET' ?  explode(',', $val) : $val;
        if (!$array[0]) $array[0] = $model->getKeyName();
        if (!$array[1] || !in_array($val, ['ASC','DESC'])) $array[1] = 'ASC';
        return $array;
    }

    public function getEndOfKey($key)
    {
        $endString = explode('_', $key);
        return $endString[count($endString)-1];
    }

    public function cleanKey($key)
    {
        $endString = $this->getEndOfKey($key);
        if ($endString == 'like') return substr($key, 0, -5);
        if ($endString == 'start') return substr($key, 0, -6);
        if ($endString == 'end') return substr($key, 0, -4);
        return $key;
    }

    public function getOperator($key)
    {
        $endString = $this->getEndOfKey($key);
        if ($endString == 'like') return 'like';
        if ($endString == 'start') return '>=';
        if ($endString == 'end') return '<=';
        return '=';
    }

    public function cleanValue($value)
    {
        $cleanVal = preg_replace(
            array(
                '/[,(),;:|!"#$&=?+^><ªº-]/',
                '/[^a-z0-9~]/i',
                '/_+/'
                ),
            " ",$value); 
        $cleanVal = str_replace('~','%',$cleanVal);
        return $cleanVal;
    }

    public function execute($query, $page=false, $request)
    {

        try{
            if (isset($page->number)) $response = $query->paginate($page->perPage, ['*'], 'page', $page->number);
            else $response = $query->get();

            $this->returnData = $response ? $response : [];
            $this->registerLog($request, $query);
            return $this->successResponse($this->returnData, 'Success', 200);
        } catch(\Throwable $th) {
            return $this->failedResponse('Error', 400, $th->getMessage());
        }

    }
    
    public function registerLog($request, $query, $status=200)
    {
        $queryMounted = $this->queryMounted($query);
        $user = getUserByToken($request->token);
        $log = $this->log->store($user, $request, $queryMounted, $status);
    }
}