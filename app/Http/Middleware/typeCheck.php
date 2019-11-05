<?php

namespace App\Http\Middleware;

use Closure;

class typeCheck
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
        dd($request->user());
        if($request->user()->type=='stu'){
            return $next($request);
        }
        return redirect('login');

    }
}
