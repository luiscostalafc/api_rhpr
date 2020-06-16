<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\EffectiveGraduatesRequest;
use App\Repositories\v1\EffectiveGraduatesRepository;

class EffectiveGraduatesController extends Controller
{
    protected $repository;
    public function __construct(EffectiveGraduatesRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"effectiveGraduates"},
    *     path="api/v1/effectiveGraduates",
    *     description="Return a list with effectiveGraduates",
    *     @OA\Response(
    *         response=200,
    *         description="A list with effectiveGraduates",
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
    public function search(EffectiveGraduatesRequest $request)
    {
        $response = $this->repository->search($request);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}
