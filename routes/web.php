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
    return view('welcome');
});

Route::get('blade', function () {
    return view('child');
});

Route::get('/about', function () {
    $tags = ['learn', 'create', 'complete'];
    return view('about', ['tags' => $tags]);
});

Route::get('/articles', function () {
    $articles = ['Статья 1', 'Статья 2', 'Статья 3'];
    return view('articles', ['articles' => $articles]);
});
