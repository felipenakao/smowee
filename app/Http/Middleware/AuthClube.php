<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Response;

class AuthClube
{
    private function isOverAge($user) {
        return \Carbon\Carbon::now()->diff(new \Carbon\Carbon($user->birth_day))->y >= 18;
    }

    private function haveClubeRole($user) {
        // return $user->role === 'clube';
        return preg_match('/admin|clube/',$user->role);
    }

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
        $isOverAge = $user && $this->isOverAge($user);
        // verificar acesso ao clube(flag clube)
        $haveClubeRole = $user && $this->haveClubeRole($user);

        if (!$user || !$isOverAge || !$haveClubeRole){
            return Response(view('clube.login', compact(['ogUrl', 'ogType', 'ogTitle', 'ogDescription', 'ogImage'])));
        }
        // dd($user);

        return Response(view('clube.display', compact(['ogUrl', 'ogType', 'ogTitle', 'ogDescription', 'ogImage', 'user'])));
    }
}
