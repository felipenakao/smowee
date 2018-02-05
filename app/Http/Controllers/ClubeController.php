<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ClubeController extends Controller
{
    public function index() {
        $ogUrl = URL::current();
        $ogType = 'website';
        $ogTitle = 'Smowee 420 - Queimando Preconceitos';
        $ogDescription = 'Participe do Clube Smowee e concorra a prêmios!';
        $ogImage = 'http://smowee.com/img/about/about-bg.jpg';

        return view('clube.display', compact(['ogUrl', 'ogType', 'ogTitle', 'ogDescription', 'ogImage']));
    }
}
