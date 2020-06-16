<?php

namespace App\Http\Controllers\v0;

use App\Http\Controllers\Controller;
use App\Http\Requests\v0\FuncoesPrivativasRequest;
use App\Repositories\v0\FuncoesPrivativasRepository;

class FuncoesPrivativasController extends Controller
{
    protected $repository;
    public function __construct(FuncoesPrivativasRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"funcoesPrivativas"},
    *     path="api/v0/funcoesPrivativas",
    *     description="Return a list with funcoesPrivativas",
    *     @OA\Response(
    *         response=200,
    *         description="A list with funcoesPrivativas",
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
    public function search(FuncoesPrivativasRequest $request)
    {
        $response = $this->repository->search($request);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}
