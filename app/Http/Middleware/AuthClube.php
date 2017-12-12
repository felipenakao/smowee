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
        $user = $request->user();
        // verificar ano de nascimento
        // verificar acesso ao clube(flag clube)
        dd($user->clube);
        if (!$user || $user->clube < 1){
        
        }

        return $next($request);
    }
}
