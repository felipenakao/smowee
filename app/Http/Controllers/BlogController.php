<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Post;

class BlogController extends Controller
{
    public function index() {
      // LISTAGEM DE TODOS POSTS
      // QUE PUDEREM SER VISTOS COM BASE NA DATA DE PUBLICACAO
      $posts = DB::table('posts')
          ->whereDate('publish_date', '<=', Carbon::now())
          ->get();
      // INFINITY SCROLLER
      // RETORNAR VIEW COM TODOS OS POSTS
      return view('blog.posts')->with(['posts' => $posts]);
    }

    public function single(Request $request, $slug) {
      // PROCURAR O SINGLE POST SE ELE JÁ PUDER SER VISTO
      $post = DB::table('posts')
          ->where('slug', $slug)
          ->whereDate('publish_date', '<=', Carbon::now())
          ->get();
      // COM BASE NA DATA DE PUBLICACAO
      // RETORNAR VIEW PARA RENDER DO POST
      return $post;
      // return view('blog.post')->with(['post' => $post]);
    }
}
