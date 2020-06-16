<?php

namespace App\Http\Controllers\v0;

use App\Http\Controllers\Controller;
use App\Http\Requests\v0\FuncPrivRequest;
use App\Repositories\v0\FuncPrivRepository;

class FuncPrivController extends Controller
{
    protected $repository;
    public function __construct(FuncPrivRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"funcPriv"},
    *     path="api/v0/funcPriv",
    *     description="Return a list with funcPrivs",
    *     @OA\Response(
    *         response=200,
    *         description="A list with funcPrivs",
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
    public function search(FuncPrivRequest $request)
    {
        $response = $this->repository->search($request);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}
