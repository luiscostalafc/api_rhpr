<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\InactiveDependentsRequest;
use App\Repositories\v1\InactiveDependentsRepository;

class InactiveDependentsController extends Controller
{
    protected $repository;
    public function __construct(InactiveDependentsRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"inactiveDependents"},
    *     path="api/v1/inactiveDependents",
    *     description="Return a list with inactiveDependents",
    *     @OA\Response(
    *         response=200,
    *         description="A list with inactiveDependents",
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
    public function search(InactiveDependentsRequest $request)
    {
        $response = $this->repository->search($request);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}
