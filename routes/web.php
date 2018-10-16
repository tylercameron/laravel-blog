<?php

use App\Task;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/posts', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comment', 'CommentsController@store');

// Route::get('/register', 'RegistrationController@create');
// Route::post('/register', 'RegistrationController@store');

// Route::get('/login', 'SessionsController@create')->name('login');
// Route::post('/login', 'SessionsController@store');
// Route::get('/logout', 'SessionsController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
