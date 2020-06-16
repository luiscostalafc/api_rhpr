<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Permission;
use App\Repositories\BaseRepository;

use App\Traits\ResponseTrait;
use Cache;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class PermissionRepository extends BaseRepository
{
    use ResponseTrait;

    protected $model;
    protected $expiration = 60;
    
	public function __construct( Permission $model )
	{
		$this->model = $model;
    }

    public function getWithUsers($id)
    {
        try{
            $this->obj = Cache::tags('permission')->remember("permission:$id", $this->expiration, function() {
                return $this->model->find($id)->with('user')->first();
            });
            $response = $this->obj ?? [];
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->contentError = $th->getMessage();
            $response = [];
        }

        return $this->mountReturn('load', $response, $this->statusCode, $this->contentError);
    }

    public function getIdByName ($permission, $simpleReturn=false)
    {
        try{
            $this->obj = Cache::tags('permission')->remember("permission-name:$permission", $this->expiration, function() {
                return $this->model->find($id)->with('user')->first();
            });
            $response = isset($this->obj->id) ? $this->obj->id: null;
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->contentError = $th->getMessage();
            $response = null;
        } 
        if ($simpleReturn) return $response;
        return $this->mountReturn('load', $response, $this->statusCode, $this->contentError);
    }
}