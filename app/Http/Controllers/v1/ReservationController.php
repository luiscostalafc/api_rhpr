<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\ReservationRequest;
use App\Repositories\v1\ReservationRepository;

class ReservationController extends Controller
{
    protected $repository;
    public function __construct(ReservationRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"Reservation"},
    *     path="api/v1/Reservation",
    *     description="Return a list with Reservation",
    *     @OA\Response(
    *         response=200,
    *         description="A list with Reservation",
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
    public function search(ReservationRequest $request)
    {
        $response = $this->repository->search($request);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}
