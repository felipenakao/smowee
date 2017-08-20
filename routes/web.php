<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog.posts');
});

Route::get('/blog/{post}', function () {
    return view('blog.post');
});

Route::get('/clube-de-beneficios', function () {
    return view('cdb.display');
});

Route::get('/clube-de-beneficios/{product}', function () {
    return view('cdb.product');
});

Route::get('/farofino', function () {
    return view('farofino.options');
});
