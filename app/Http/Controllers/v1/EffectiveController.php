<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\EffectiveRequest;
use App\Repositories\v1\EffectiveRepository;

class EffectiveController extends Controller
{
    protected $repository;
    public function __construct(EffectiveRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"effective"},
    *     path="api/v1/effective",
    *     description="Return a list with effectives",
    *     @OA\Response(
    *         response=200,
    *         description="A list with effectives",
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
    public function search(EffectiveRequest $request)
    {
        $response = $this->repository->search($request);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}
