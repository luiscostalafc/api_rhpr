<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Email;
use App\Repositories\BaseRepository;

use App\Traits\ResponseTrait;
use Cache;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class EmailRepository extends BaseRepository
{
    use ResponseTrait;

    protected $model;
    protected $expiration = 60;
    
	public function __construct( Email $model )
	{
		$this->model = $model;
    }

    public function getWithUsers($id)
    {
        try{
            $this->obj = Cache::tags('email')->remember("email:$id", $this->expiration, function() {
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