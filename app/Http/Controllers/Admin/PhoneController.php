<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PhoneRequest;
use App\Repositories\Admin\PhoneRepository;

class PhoneController extends Controller
{
    protected $repository;
    public function __construct(PhoneRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"admin\Phone"},
    *     path="api/v1/admin\Phone",
    *     description="Return a list with admin\Phones",
    *     @OA\Response(
    *         response=200,
    *         description="A list with admin\Phones",
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
    *     tags={"admin\Phone"},
    *     path="api/v1/admin\Phone",
    *     description="Create new admin\Phone",
    *     @OA\Response(
    *         response=200,
    *         description="A created admin\Phone",
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
    public function store(PhoneRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"admin\Phone"},
    *     path="api/v1/admin\Phone",
    *     description="Return a specific admin\Phone",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\Phone",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific admin\Phone",
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
    *     tags={"admin\Phone"},
    *     path="api/v1/admin\Phone",
    *     description="Update a specific admin\Phone",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\Phone",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated admin\Phone",
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
    public function update(PhoneRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"admin\Phone"},
    *     path="api/v1/admin\Phone",
    *     description="Remove a specific admin\Phones",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\Phone",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted admin\Phone",
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
    *     tags={"admin\Phone"},
    *     path="api/v1/admin\Phone/restore",
    *     description="Restore a specific admin\Phone",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\Phone",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored admin\Phone",
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
    *     tags={"admin\Phone"},
    *     path="api/v1/admin\Phone/forceDelete",
    *     description="Remove permanently admin\Phone",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\Phone",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly admin\Phone",
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
