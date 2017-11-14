<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topPosts = DB::table('posts')
                ->join('posts_categories', 'posts.category_id', '=', 'posts_categories.id')
                ->whereDate('posts.publish_date', '<=', Carbon::now())
                ->whereNull('deleted_at')
                ->select(
                    'posts.*',
                    'posts_categories.name as category_name',
                    'posts_categories.color as category_color'
                )
                ->orderBy('views', 'desc')
                ->latest()
                ->limit(6)
                ->get();
        // VARIAVEL DE CONTROLE PARA DISPLAY BLOG
        $i = 0;
        // VARIAVEIS PARA SOCIAL METATAGS
        $ogUrl = URL::current();
        $ogType = 'website';
        $ogTitle = 'Smowee 420 - Queimando Preconceitos';
        $ogDescription = 'O Smowee é uma marca canábica brasileira, cujo o objetivo é a conscientização e disseminação de informações sobre a planta Cannabis Sativa, utilizando e desenvolvendo tecnologia focada para o nosso público 420.';
        $ogImage = 'http://smowee.com/img/about/about-bg.jpg';

        return view('home', compact(['topPosts', 'i', 'ogUrl', 'ogType', 'ogTitle', 'ogDescription', 'ogImage']));
    }
}
