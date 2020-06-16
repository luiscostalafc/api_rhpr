<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\InactiveRequest;
use App\Repositories\v1\InactiveRepository;

class InactiveController extends Controller
{
    protected $repository;
    public function __construct(InactiveRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"inactive"},
    *     path="api/v1/inactive",
    *     description="Return a list with inactives",
    *     @OA\Response(
    *         response=200,
    *         description="A list with inactives",
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
    public function search(InactiveRequest $request)
    {
        $response = $this->repository->search($request);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}
