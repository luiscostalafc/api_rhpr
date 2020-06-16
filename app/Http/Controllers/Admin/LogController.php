<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LogRequest;
use App\Repositories\Admin\LogRepository;

class LogController extends Controller
{
    protected $repository;
    public function __construct(LogRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"admin\Log"},
    *     path="api/v1/admin\Log",
    *     description="Return a list with admin\Logs",
    *     @OA\Response(
    *         response=200,
    *         description="A list with admin\Logs",
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
    *     tags={"admin\Log"},
    *     path="api/v1/admin\Log",
    *     description="Create new admin\Log",
    *     @OA\Response(
    *         response=200,
    *         description="A created admin\Log",
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
    public function store(LogRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"admin\Log"},
    *     path="api/v1/admin\Log",
    *     description="Return a specific admin\Log",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\Log",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific admin\Log",
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
        $response = $this->repository->findOrFail($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"admin\Log\{key}\{value}"},
    *     path="api/v1/admin/Log/{key}/{value}",
    *     description="Return a list of specifics admin\Log",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of admin\Log",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific admin\Log",
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
    public function getByPair($key, $value)
    {
        $response = $this->repository->getByPair($key, $value);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

}
