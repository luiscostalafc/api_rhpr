<?php

namespace App\Http\Controllers\v0;

use App\Http\Controllers\Controller;
use App\Http\Requests\v0\OpmImpMeta4Request;
use App\Repositories\v0\OpmImpMeta4Repository;

class OpmImpMeta4Controller extends Controller
{
    protected $repository;
    public function __construct(OpmImpMeta4Repository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"opmImpMeta4"},
    *     path="api/v0/opmImpMeta4",
    *     description="Return a list with opmImpMeta4s",
    *     @OA\Response(
    *         response=200,
    *         description="A list with opmImpMeta4s",
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
    public function search(OpmImpMeta4Request $request)
    {
        $response = $this->repository->search($request);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}
