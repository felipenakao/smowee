<?php

namespace App\Http\Middleware;

use Closure;

class AuthClube
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
        dd($request->user()->name);
        return $next($request);
    }
}
