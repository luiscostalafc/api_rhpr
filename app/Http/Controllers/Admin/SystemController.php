<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SystemRequest;
use App\Repositories\Admin\SystemRepository;

class SystemController extends Controller
{
    protected $repository;
    public function __construct(SystemRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"admin\System"},
    *     path="api/v1/admin\System",
    *     description="Return a list with admin\Systems",
    *     @OA\Response(
    *         response=200,
    *         description="A list with admin\Systems",
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
    *     tags={"admin\System"},
    *     path="api/v1/admin\System",
    *     description="Create new admin\System",
    *     @OA\Response(
    *         response=200,
    *         description="A created admin\System",
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
    public function store(SystemRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"admin\System"},
    *     path="api/v1/admin\System",
    *     description="Return a specific admin\System",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\System",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific admin\System",
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
        $response = $this->repository->getWithUsers($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Put(
    *     tags={"admin\System"},
    *     path="api/v1/admin\System",
    *     description="Update a specific admin\System",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\System",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated admin\System",
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
    public function update(SystemRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"admin\System"},
    *     path="api/v1/admin\System",
    *     description="Remove a specific admin\Systems",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\System",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted admin\System",
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
    *     tags={"admin\System"},
    *     path="api/v1/admin\System/restore",
    *     description="Restore a specific admin\System",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\System",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored admin\System",
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
    *     tags={"admin\System"},
    *     path="api/v1/admin\System/forceDelete",
    *     description="Remove permanently admin\System",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\System",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly admin\System",
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
