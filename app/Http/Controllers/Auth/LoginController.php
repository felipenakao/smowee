<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/admin/panel';
    protected function redirectTo()
    {
        // se o usuário estiver tentado se logar como admin
        // redireciona ele para o admin, se não para o clube
        $loginFromAdmin = $this->fromAdmin();
        $url = $fromAdmin ? '/admin/panel' : '/clube';

        return $url;
    }

    private function fromAdmin() {
        // verifica se a o usuario esta tentando se logar como admin
        $fromURL = URL::previous();
        // verificando a url de onde ele veio
        return preg_match('/admin/',$fromURL);
    }

    private function socialMetatags() {
        $ogUrl = URL::current();
        $ogType = 'website';
        $ogTitle = 'Smowee 420 - Queimando Preconceitos';
        $ogDescription = 'Participe do Clube Smowee e concorra a prêmios!';
        $ogImage = 'http://smowee.com/img/about/about-bg.jpg';

        return compact(['ogUrl', 'ogType', 'ogTitle', 'ogDescription', 'ogImage']);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function showLoginForm()
    {
        $loginFromAdmin = $this->fromAdmin();

        //verificar se o usuario esta tentando acessar o clube ou o admin
        if ($loginFromAdmin) return view('admin.login');
        
        return view('clube.login', $this->socialMetatags());
    }
}
