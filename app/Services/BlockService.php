<?php
namespace App\Services;

use App\Traits\ResponseTrait;
use App\Repositories\Admin\UserRepository;

class BlockService {
    use ResponseTrait;

    protected $repository;
    public function __construct(UserRepository $repository)
	{
        $this->repository = $repository;
    }

    public function addStrike($userId)
    {
        $getCurrentStrikes = $this->repository->find($userId)->first()->strikes;
        $newStrikes = $getCurrentStrikes + 1;
        if ($newStrikes > config('api_configs.maximun_strikes')) $this->blockUser($userId);
        $response = $this->repository->findAndUpdate($userId, ['strikes' => $newStrikes]);
        return $this->successResponse([], 'Added Strike', 200);
    }

    public function blockUser($userId)
    {
        $response = $this->repository->findAndUpdate($userId, ['block' => 1]);
        return $this->successResponse([], 'Blocked User', 200);
    }

    public function unblockUser($userId)
    {
        $response = $this->repository->findAndUpdate($userId, ['block' => 0]);
        return $this->successResponse([], 'Unblocked User', 200);
    }
    
}