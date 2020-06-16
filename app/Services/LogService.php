<?php
namespace App\Services;

use App\Traits\ResponseTrait;
use App\Repositories\Admin\LogRepository;

class LogService {
    use ResponseTrait;

    protected $repository;
    public function __construct(LogRepository $repository)
	{
        $this->repository = $repository;
    }

    public function store($user, $request, $query='-', $status=200)
    {
        if (!isset($user) || !isset($user->rg) || !isset($user->name)) {
            $response = $this->failedResponse('User is required');
            return response()->json($response->data, 401, $response->headers, $response->options);
        }

        if (!isset($request)) {
            $response = $this->failedResponse('Request is required');
            return response()->json($response->data, 401, $response->headers, $response->options);
        }

        if (!isset($query)) {
            $response = $this->failedResponse('Query is required');
            return response()->json($response->data, 401, $response->headers, $response->options);
        }

        $data = [
            'rg' => $user->rg,
            'name' => $user->name,
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'query' => $query,
            'status_request' => $status,
            'created_at' => date('Y-m-d H:i:s')
        ];

        $response = $this->repository->create($data);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}