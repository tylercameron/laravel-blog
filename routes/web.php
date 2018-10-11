<?php

use App\Task;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');