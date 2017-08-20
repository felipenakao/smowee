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
// BLOG
Route::get('/blog', function () {
    return view('blog.posts');
});

Route::get('/blog/{post}', function () {
    return view('blog.post');
});
// BLOG
// CDB
Route::get('/clube-de-beneficios', function () {
    return view('cdb.display');
});

Route::get('/clube-de-beneficios/{product}', function () {
    return view('cdb.product');
});
// CDB
// FAROFINO
Route::get('/farofino', function () {
    return view('farofino.options');
});
// FAROFINO
// ADMIN
Route::get('/admin', function () {
    return view('admin.login');
});

Route::get('/admin/painel', function () {
    return view('admin.painel');
});

Route::get('/admin/cdb', function () {
    return view('admin.cdb');
});

Route::get('/admin/farofino', function () {
    return view('admin.farofino');
});

Route::get('/admin/blog', function () {
    return view('admin.blog');
});
// ADMIN