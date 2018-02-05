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

Route::get('/', 'HomeController@index');

// PARCEIROS
Route::get('/parceiros', function () {
    return view('parceiros.content');
});

// PAGE 404
Route::get('/404', function () {
    return view('404');
});

// PAGE SORTEIO
Route::get('/sorteio', function () {
    return view('sorteio');
});

// BLOG
Route::get('/blog', 'BlogController@index');
Route::get('/blog/{slug}', 'BlogController@single');

// Route::get('/blog/{post}', function () {
//     return view('blog.post');
// });
// BLOG
// SMOWEE CLUB
Route::get('/clube', 'ClubeController@index')->middleware('can:access-clube');
// Route::get('/clube', 'ClubeController@index')->middleware('auth.clube');
// Route::get('/clube', function () {
//     return view('cdb.display');
// });

Route::get('/login', function () {
    return view('cdb.login');
});

Route::get('/clube-de-beneficios/{product}', function () {
    return view('cdb.product');
});
// SMOWEE CLUB
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
// EMAIL
Route::post('/send', 'EmailController@send');
// EMAIL

Route::get('/farofino/list', function () {
    return view('farofino.pricelist');
});

Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();

Route::resource('posts', 'PostController');

Route::get('/home', 'HomeController@index')->name('home');
