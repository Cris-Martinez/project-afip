<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Exception;

class authJWT
{
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
            $user = JWTAuth::toUser($request->input('token'));
        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                return response()->json(['error'=>'El Authorization Token es invalido.']);
            }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                return response()->json(['error'=>'El Authorization Token expiro.']);
            }else{
                return response()->json(['error'=>'Hubo un error en el servidor.']);
            }
        }
        return $next($request);
    }
}