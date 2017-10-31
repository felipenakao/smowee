<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
                ->select(
                    'posts.*',
                    'posts_categories.name as category_name',
                    'posts_categories.color as category_color'
                )
                ->orderBy('views', 'desc')
                ->latest()
                ->limit(6)
                ->get();

        return view('home')->with(['topPosts' => $topPosts, 'i' => 0]);
        // return $topPosts;
    }
}
