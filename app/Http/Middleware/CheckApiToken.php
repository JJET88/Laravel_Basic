<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!$request->has("token")){
            return response()->json(["message"=>"Token need"]);
        }else if($request->token !== "jjet"){
            return response()->json(["message"=>"Token is wrong"]);
        }
        return $next($request);
    }
}
