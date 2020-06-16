<?php

namespace App\Http\Controllers\v0;

use App\Http\Controllers\Controller;
use App\Http\Requests\v0\PolicialRequest;
use App\Repositories\v0\PolicialRepository;

class PolicialController extends Controller
{
    protected $repository;
    public function __construct(PolicialRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"policial"},
    *     path="api/v0/policial",
    *     description="Return a list with policials",
    *     @OA\Response(
    *         response=200,
    *         description="A list with policials",
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
    public function search(PolicialRequest $request)
    {
        $response = $this->repository->search($request);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}
