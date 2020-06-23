<?php

namespace App\Repositories\Admin;

use App\Models\Admin\System;
use App\Repositories\BaseRepository;

use App\Traits\ResponseTrait;
use Cache;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class SystemRepository extends BaseRepository
{
    use ResponseTrait;

    protected $model;
    protected $expiration = 60;
    
	public function __construct( System $model )
	{
		$this->model = $model;
    }

    public function getWithUsers($id)
    {
        try{
            $this->obj = Cache::tags('system')->remember("system:$id", $this->expiration, function() use ($id){
                return $this->model->where('id',$id)->with('users')->get();
            });
            $response = $this->obj ?? [];
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->contentError = $th->getMessage();
            $response = [];
        }

        return $this->mountReturn('load', $response, $this->statusCode, $this->contentError);
    }
}