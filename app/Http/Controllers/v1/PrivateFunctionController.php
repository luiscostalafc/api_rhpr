<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\PrivateFunctionRequest;
use App\Repositories\v1\PrivateFunctionRepository;

class PrivateFunctionController extends Controller
{
    protected $repository;
    public function __construct(PrivateFunctionRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"PrivateFunction"},
    *     path="api/v1/PrivateFunction",
    *     description="Return a list with PrivateFunction",
    *     @OA\Response(
    *         response=200,
    *         description="A list with PrivateFunction",
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
    public function search(PrivateFunctionRequest $request)
    {
        $response = $this->repository->search($request);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}
