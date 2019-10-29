<?php

namespace App\Http\Middleware;

use Closure;

class navMiddleware
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

        if(Auth::guard('stu')->check()){

        }
        return $next($request);
    }
}
