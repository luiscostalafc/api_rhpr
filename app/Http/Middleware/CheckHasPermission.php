<?php

namespace App\Http\Middleware;

use Closure;
use App\Repositories\Admin\UserRepository;
use App\Traits\ResponseTrait;
use App\Services\LogService;
use App\Services\AuthorizationService;
use App\Services\BlockService;

class CheckHasPermission
{
  use ResponseTrait;

  protected $repository;
  protected $log;
  protected $authorization;
  protected $block;
  public function __construct(
    UserRepository $repository, 
    LogService $log, 
    AuthorizationService $authorization,
    BlockService $block
  )
	{
    $this->repository = $repository;
    $this->log = $log;
    $this->authorization = $authorization;
    $this->block = $block;
  }
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next, $permission='')
  {
    $user = $this->repository->getUserByToken($request->token);
    if (!$user) {
      $response = $this->failedResponse('User not found!');
      return response()->json($response->data, 401, $response->headers, $response->options);
    }

    $response = $this->authorization->hasPermission($user->id, $permission, true);
    if(!$response['authorized']) {
      if(!$response['error']) {
        $log = $this->log->store($user, $request, $query='-', $status=401);     
        $block = $this->block->addStrike($user->id);
      }

      $headers = $this->mountHeader('error', $response['msg']);
      return response()->json([], 401, $headers);
    }

    return $next($request);
  }
}