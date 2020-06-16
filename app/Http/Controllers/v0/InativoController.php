<?php

namespace App\Http\Controllers\v0;

use App\Http\Controllers\Controller;
use App\Http\Requests\v0\InativoRequest;
use App\Repositories\v0\InativoRepository;

class InativoController extends Controller
{
    protected $repository;
    public function __construct(InativoRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"inativo"},
    *     path="api/v0/inativo",
    *     description="Return a list with inativo",
    *     @OA\Response(
    *         response=200,
    *         description="A list with inativo",
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
    public function search(InativoRequest $request)
    {
        $response = $this->repository->search($request);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}
