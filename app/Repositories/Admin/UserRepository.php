<?php

namespace App\Repositories\Admin;

use App\Models\Admin\User;
use App\Repositories\BaseRepository;
use App\Repositories\Admin\PermissionRepository;

use App\Traits\ResponseTrait;
use Illuminate\Support\Arr;

use Illuminate\Support\Facades\Hash;
use JWTAuth;
use Cache;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class UserRepository extends BaseRepository
{
    use ResponseTrait;

    protected $model;
    protected $permission;
    protected $expiration = 60;
    
	public function __construct( 
        User $model, 
        PermissionRepository $permission 
    )
	{
		$this->model = $model;
		$this->permission = $permission;
    }

    public function getAllData($id)
    {
        try{
            $this->obj = Cache::tags('user')->remember("user:$id", $this->expiration, function() {
                return $this->model->where('id',$id)->with(['systems','phones','emails','permissions'])->get();
            });
            $response = $this->obj ?? [];
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->contentError = $th->getMessage();
            $response = [];
        }

        return $this->mountReturn('load', $response, $this->statusCode, $this->contentError);
    }

    public function assyncPermissions ($permissions=[], $id=null, $simpleReturn=false)
    {
        if (!$permissions || !$id) return false;
        
        $permissionsIds = $this->getPermissionIds($permissions);
        
        try {
            $this->obj = $this->model->where('id',$id)->first()->permissions()->sync($permissionsIds);
            $response = $this->obj ?? [];
            $this->statusCode = 200;
        } catch (\Throwable $th) {
            $this->contentError = $th->getMessage();
            $response = [];
        } 
        
        if ($simpleReturn) return $this->attachedsArrayToString($response);
        return $this->mountReturn('update', $response, $this->statusCode, $this->contentError);
    }

    public function attachedsArrayToString ($attacheds)
    {
        $attached = (isset($attacheds['attached']) && count($attacheds['attached'])) ? implode(", ",$attacheds['attached']) : '';
        $detached = (isset($attacheds['detached']) && count($attacheds['detached'])) ? implode(", ",$attacheds['detached']) : '';
        
        return [
            'attached' => $attached,
            'detached' => $detached
        ];
    }

    public function getPermissionIds ($permissions)
    {
        $permissionsIds = [];
        foreach ($permissions as $permission) {
            if (is_numeric($permission)) $idPermission = $permission;
            else $idPermission = $this->permission->getIdByName($permission, true);
            array_push($permissionsIds, $idPermission);
        }
        if (!count($permissionsIds)) return [];
        return $permissionsIds;
    }

    public function getUserByRg ($rg)
    {
        try {
            $this->obj = $this->model->where('rg',$rg)->first();
            $response = $this->obj ?? [];
            $this->statusCode = 200;
        } catch (\Throwable $th) {
            $this->contentError = $th->getMessage();
            $response = [];
        } 

        return $response;
    }

    public function getUserByToken ($token)
    {
        try {
            $this->obj = JWTAuth::toUser($token);
            $response = $this->obj ?? [];
            $this->statusCode = 200;
        } catch (\Throwable $th) {
            $this->contentError = $th->getMessage();
            $response = [];
        } 

        return $response;
    }

    public function login ($data)
    {
        $user = $this->getUserByRg($data['rg']);
        if (!$user) return $this->failedResponse('User not found', 401);
        if(!Hash::check($data['password'], $user->password)) return $this->failedResponse('RG or password incorrect', 401);
        try {
            $token = JWTAuth::fromUser($user);
            $data = ['user' => $user, 'access_token' => $token, 'token_type' => 'bearer'];
            return $this->successResponse($data, 'Logged', 200);
        } catch (\Throwable $th) {
            return $this->failedResponse('Error in token', 401, $th->getMessage());
        }
    }

    public function getAllPermissions($id, $simpleReturn=false)
    {
        try {
            $this->obj = $this->model->where('id',$id)->first()->permissions()->get()->pluck('permission')->toArray();
            $response = $this->obj ?? [];
            $this->statusCode = 200;
        } catch (\Throwable $th) {
            $this->contentError = $th->getMessage();
            $response = [];
        } 
        
        if ($simpleReturn) return $response;
        return $this->mountReturn('load', $response, $this->statusCode, $this->contentError);
    }
}