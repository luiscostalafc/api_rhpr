<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AuthRequest;
use App\Repositories\Admin\UserRepository;

class AuthController extends Controller
{
    protected $repository;
    public function __construct(UserRepository $repository)
	{
        $this->repository = $repository;
    }

    
    /**
    * @OA\Post(
    *     tags={"admin\login"},
    *     path="api/v1/admin\login",
    *     description="login user",
    *     @OA\Response(
    *         response=200,
    *         description="Login",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function login(AuthRequest $request)
    {
        $response = $this->repository->login($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    
    /**
    * @OA\Put(
    *     tags={"admin\logout"},
    *     path="api/v1/admin\logout",
    *     description="Update a specific admin\logout",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\User",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="logout user",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function logout(AuthRequest $request, $id)
    {
        $response = $this->repository->logout($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    
}
