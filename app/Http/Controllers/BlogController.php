<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class BlogController extends Controller
{
    public function index() {
      // LISTAGEM DE TODOS POSTS
      $posts = DB::table('posts')->get();
      // QUE PUDEREM SER VISTOS COM BASE NA DATA DE PUBLICACAO
      // INFINITY SCROLLER
      // RETORNAR VIEW COM TODOS OS POSTS
      return view('blog.posts')->with(['posts' => $posts]);
    }

    public function single(Request $request, $id) {
      // PROCURAR O SINGLE POST SE ELE JÁ PUDER SER VISTO
      $post = DB::table('posts')->where('id', $id)->get();
      // COM BASE NA DATA DE PUBLICACAO
      // RETORNAR VIEW PARA RENDER DO POST
      return $post;
      // return view('blog.post')->with(['post' => $post]);
    }
}
