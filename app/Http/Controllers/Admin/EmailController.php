<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EmailRequest;
use App\Repositories\Admin\EmailRepository;

class EmailController extends Controller
{
    protected $repository;
    public function __construct(EmailRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"admin\Email"},
    *     path="api/v1/admin\Email",
    *     description="Return a list with admin\Emails",
    *     @OA\Response(
    *         response=200,
    *         description="A list with admin\Emails",
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
    *     tags={"admin\Email"},
    *     path="api/v1/admin\Email",
    *     description="Create new admin\Email",
    *     @OA\Response(
    *         response=200,
    *         description="A created admin\Email",
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
    public function store(EmailRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"admin\Email"},
    *     path="api/v1/admin\Email",
    *     description="Return a specific admin\Email",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\Email",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific admin\Email",
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
    *     tags={"admin\Email"},
    *     path="api/v1/admin\Email",
    *     description="Update a specific admin\Email",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\Email",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated admin\Email",
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
    public function update(EmailRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"admin\Email"},
    *     path="api/v1/admin\Email",
    *     description="Remove a specific admin\Emails",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\Email",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted admin\Email",
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
    *     tags={"admin\Email"},
    *     path="api/v1/admin\Email/restore",
    *     description="Restore a specific admin\Email",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\Email",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored admin\Email",
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
    *     tags={"admin\Email"},
    *     path="api/v1/admin\Email/forceDelete",
    *     description="Remove permanently admin\Email",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\Email",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly admin\Email",
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
