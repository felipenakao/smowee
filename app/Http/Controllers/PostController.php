<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::whereNull('deleted_at')
                ->orderBy('publish_date', 'desc')
                ->get();
        // dd($posts);
        return view('admin.post.list', compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('posts_categories')
            ->orderBy('name')
            ->get();

        return view('admin.post.new')->with(['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $post = new Post([
            'title' => $request->get('title'),
            'slug' => Str::slug($request->get('title')),
            'cover' => $request->get('cover'),
            'category_id' => $request->get('category_id'),
            'tags' => $request->get('tags'),
            'publish_date' => $request->get('publish_date'),
            'content' => $request->get('content'),
            'abstract' => $request->get('abstract'),
            'writer_id' => $request->user()->id,
        ]);
        // dd($post);
        $post->save();
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = DB::table('posts_categories')
            ->orderBy('name')
            ->get();
        // $post = $post;
        // return [$post->toArray()];
        return view('admin.post.edit', compact(['post', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->cover = $request->cover;
        $post->category_id = $request->category_id;
        $post->tags = $request->tags;
        $post->content = $request->content;
        $post->abstract = $request->abstract;

        $post->save();
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->deleted_at = Carbon::now();

        $post->save();
        return redirect('/posts');
    }
}
