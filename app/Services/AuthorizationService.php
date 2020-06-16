<?php
namespace App\Services;

use App\Traits\ResponseTrait;
use App\Repositories\Admin\UserRepository;

class AuthorizationService {
    use ResponseTrait;

    protected $repository;
    public function __construct(UserRepository $repository)
	{
        $this->repository = $repository;
    }

    public function hasPermission($userId, $permission, $simpleReturn=false)
    {
        $permissions = $this->repository->getAllPermissions($userId, true);
        if (!$permissions) {
            if ($simpleReturn) return ['authorized' => false, 'error' => true, 'msg' => 'Not has permissions!'];
            return $this->failedResponse('Not has permissions!');
        }

        if (!in_array($permission, $permissions)) {
            if ($simpleReturn) return ['authorized' => false, 'error' => false, 'msg' => 'Not has permission to access this resource! a log of this action was recorded'];
            return $this->failedResponse('Not has permission to access this resource! a log of this action was recorded');
        }

        if ($simpleReturn) return ['authorized' => true, 'error' => false, 'msg' => 'Has permission!'];
        return $this->successResponse([], 'Has permission', 200);
    }    
}