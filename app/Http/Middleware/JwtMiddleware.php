<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Auth;
use Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use App\Traits\ResponseTrait;

class JwtMiddleware extends BaseMiddleware
{
    use ResponseTrait;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                $response = $this->failedResponse('Invalid Token!');
                return response()->json($response->data, 401, $response->headers, $response->options);
            }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                $response = $this->failedResponse('Expired Token!');
                return response()->json($response->data, 401, $response->headers, $response->options);
            }else{
                $response = $this->failedResponse('Token not found!');
                return response()->json($response->data, 401, $response->headers, $response->options);
            }
        }
        return $next($request);
    }
}