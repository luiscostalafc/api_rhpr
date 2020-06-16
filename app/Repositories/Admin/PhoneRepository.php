<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Phone;
use App\Repositories\BaseRepository;

use App\Traits\ResponseTrait;
use Cache;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class PhoneRepository extends BaseRepository
{
    use ResponseTrait;

    protected $model;
    protected $expiration = 60;
    
	public function __construct( Phone $model )
	{
		$this->model = $model;
    }

    public function getWithUsers($id)
    {
        try{
            $this->obj = Cache::tags('phone')->remember("phone:$id", $this->expiration, function() {
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
}