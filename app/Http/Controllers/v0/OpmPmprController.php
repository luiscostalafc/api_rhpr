<?php

namespace App\Http\Controllers\v0;

use App\Http\Controllers\Controller;
use App\Http\Requests\v0\OpmPmprRequest;
use App\Repositories\v0\OpmPmprRepository;

class OpmPmprController extends Controller
{
    protected $repository;
    public function __construct(OpmPmprRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"opmPmpr"},
    *     path="api/v0/opmPmpr",
    *     description="Return a list with opmPmprs",
    *     @OA\Response(
    *         response=200,
    *         description="A list with opmPmprs",
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
    public function search(OpmPmprRequest $request)
    {
        $response = $this->repository->search($request);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}
