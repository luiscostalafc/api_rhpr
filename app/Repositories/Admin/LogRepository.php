<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Log;
use App\Repositories\BaseRepository;

use App\Traits\ResponseTrait;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class LogRepository extends BaseRepository
{
    use ResponseTrait;

    protected $model;
    
	public function __construct( Log $model )
	{
		$this->model = $model;
    }

    public function getByPair($key, $value)
    {
        // dd($value);
        $validKeys = ['rg', 'name', 'ip', 'status_request'];
        if (!isset($key) || !in_array($key, $validKeys)) {
            return $this->failedResponse('key should be in: '.implode(', ', $validKeys));
        }

        if (!isset($value)) {
            return $this->failedResponse('Value is required');
        }

        $castValue = ($key == 'status_request') ? (int) $value : (string) $value;
        try{
            $this->obj = $this->model->where($key, $castValue)->get();
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->returnContent = $th->getMessage();
        }

        return $this->mountReturn('load', $this->obj, $this->statusCode, $this->contentError);
    }
}