<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Repositories\Admin\UserRepository;

class UserController extends Controller
{
    protected $repository;
    public function __construct(UserRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"admin\User"},
    *     path="api/v1/admin\User",
    *     description="Return a list with admin\Users",
    *     @OA\Response(
    *         response=200,
    *         description="A list with admin\Users",
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
    public function index()
    {
        $response = $this->repository->all();
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Post(
    *     tags={"admin\User"},
    *     path="api/v1/admin\User",
    *     description="Create new admin\User",
    *     @OA\Response(
    *         response=200,
    *         description="A created admin\User",
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
    public function store(UserRequest $request)
    {
        $response = $this->repository->create($request->all());
        if (isset($request->permissions) && isset($response->data->id)) {
            $assyncPermissions = $this->repository->assyncPermissions($request->permissions, $response->data->id, true);
            $response->headers['attached'] = $assyncPermissions["attached"];
            $response->headers['detached'] = $assyncPermissions["detached"];
        }
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"admin\User"},
    *     path="api/v1/admin\User",
    *     description="Return a specific admin\User",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\User",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific admin\User",
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
    public function show($id)
    {
        $response = $this->repository->getAllData($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Put(
    *     tags={"admin\User"},
    *     path="api/v1/admin\User",
    *     description="Update a specific admin\User",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\User",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated admin\User",
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
    public function update(UserRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        if (isset($request->permissions)) {
            $assyncPermissions = $this->repository->assyncPermissions($request->permissions, $id, true);
            $response->headers['attached'] = $assyncPermissions["attached"];
            $response->headers['detached'] = $assyncPermissions["detached"];
        }
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"admin\User"},
    *     path="api/v1/admin\User",
    *     description="Remove a specific admin\Users",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\User",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted admin\User",
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
    public function destroy($id)
    {
        $response = $this->repository->findAndDelete($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Put(
    *     tags={"admin\User"},
    *     path="api/v1/admin\User/restore",
    *     description="Restore a specific admin\User",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\User",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored admin\User",
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
    public function restore($id)
    {
        $response = $this->repository->findAndRestore($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"admin\User"},
    *     path="api/v1/admin\User/forceDelete",
    *     description="Remove permanently admin\User",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\User",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly admin\User",
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
    public function forceDelete($id)
    {
        $response = $this->repository->findAndDestroy($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

}
