<?php

namespace App\Http\Middleware;

use Closure;

class IpMiddleware
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
//        $allowIps = config('constants.IP_LIST');
//        if (!in_array($request->ip(), $allowIps)) {
//
//            return response()->json(['code' => 0, 'message' => 'You are not allow']);
//        }

        return $next($request);
    }
}
