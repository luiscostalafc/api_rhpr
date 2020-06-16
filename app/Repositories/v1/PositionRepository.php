<?php

namespace App\Repositories\v1;

use App\Models\v1\Position;
use App\Repositories\BaseRepository;

use App\Traits\ResponseTrait;
use App\Services\QueryService;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class PositionRepository extends BaseRepository
{
    use ResponseTrait;

    protected $model;
    protected $service;
    protected $expiration = 60;
    
	public function __construct( Position $model,  QueryService $service  )
	{
		$this->model = $model;
        $this->service = $service;
    }

    public function search($request)
    {
        $page = $this->service->sanitizePages($request->all());
        $queryBuilder = $this->service->query($this->model, $request, true);
        $execute = $this->service->execute($queryBuilder, $page, $request);

        return $this->mountReturn(
            'load', 
            $execute->data, 
            $execute->status,
            $execute->headers['contentError'],
            $showMessage=true,
            $options=0
        );
    }
}