<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Response;

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
        $response = $next($request);
        $ogUrl = URL::current();
        $ogType = 'website';
        $ogTitle = 'Smowee 420 - Queimando Preconceitos';
        $ogDescription = 'Participe do Clube Smowee e concorra a prêmios!';
        $ogImage = 'http://smowee.com/img/about/about-bg.jpg';

        $user = $request->user();
        // verificar ano de nascimento
        // verificar acesso ao clube(flag clube)
        if (!$user || $user->clube < 1){
            return Response(view('clube.login', compact(['ogUrl', 'ogType', 'ogTitle', 'ogDescription', 'ogImage'])));
            dd($user);
        }

        return $response;
    }
}
