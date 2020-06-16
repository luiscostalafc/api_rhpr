<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\PrivateFunctionPeriodRequest;
use App\Repositories\v1\PrivateFunctionPeriodRepository;

class PrivateFunctionPeriodController extends Controller
{
    protected $repository;
    public function __construct(PrivateFunctionPeriodRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"privateFunctionPeriod"},
    *     path="api/v1/privateFunctionPeriod",
    *     description="Return a list with privateFunctionPeriod",
    *     @OA\Response(
    *         response=200,
    *         description="A list with privateFunctionPeriod",
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
    public function search(PrivateFunctionPeriodRequest $request)
    {
        $response = $this->repository->search($request);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}
