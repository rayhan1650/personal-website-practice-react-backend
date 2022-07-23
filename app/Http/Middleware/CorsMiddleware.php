<?php

namespace App\Http\Middleware;

use Closure;

class CorsMiddleware
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
        // Pre-Middleware Action


        // $headers=[
        //     'Access-Control-Allow-Origin'=>'*',
        //     'Access-Control-Allow-Credentials'=>'true',
        //     'Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Authorization, Origin',
        //     'Access-Control-Allow-Methods'=>  'POST, PUT,DELETE,GET,OPTIONS'
        // ];

        // if($request->isMethod('OPTIONS')){
        //     return response()->json('ok',200,$headers);
        // }

        $response = $next($request)->header('Access-Control-Allow-Origin','*');

        // Post-Middleware Action

        return $response;
    }
}
