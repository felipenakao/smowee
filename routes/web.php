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

Route::get('/login', function () {
    return view('cdb.login');
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

Route::get('/admin/panel', function () {
    return view('admin.painel');
})->middleware('auth');

Route::get('/admin/cdb', function () {
    return view('admin.cdb');
})->middleware('auth');

Route::get('/admin/farofino', function () {
    return view('admin.farofino');
})->middleware('auth');

Route::get('/admin/blog', function () {
    return view('admin.blog');
})->middleware('auth');
// ADMIN

Route::get('/farofino/list', function () {
    return view('farofino.pricelist');
});

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/parceiros', function () {
    return view('parceiros.content');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
