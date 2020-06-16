<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\HistoricalPoliceRequest;
use App\Repositories\v1\HistoricalPoliceRepository;

class HistoricalPoliceController extends Controller
{
    protected $repository;
    public function __construct(HistoricalPoliceRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"HistoricalPolice"},
    *     path="api/v1/HistoricalPolice",
    *     description="Return a list with HistoricalPolices",
    *     @OA\Response(
    *         response=200,
    *         description="A list with HistoricalPolices",
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
    public function search(HistoricalPoliceRequest $request)
    {
        $response = $this->repository->search($request);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}
