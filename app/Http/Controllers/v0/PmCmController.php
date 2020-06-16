<?php

namespace App\Http\Controllers\v0;

use App\Http\Controllers\Controller;
use App\Http\Requests\v0\PmCmRequest;
use App\Repositories\v0\PmCmRepository;

class PmCmController extends Controller
{
    protected $repository;
    public function __construct(PmCmRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"pmCm"},
    *     path="api/v0/pmCm",
    *     description="Return a list with pmCms",
    *     @OA\Response(
    *         response=200,
    *         description="A list with pmCms",
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
    public function search(PmCmRequest $request)
    {
        $response = $this->repository->search($request);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}
