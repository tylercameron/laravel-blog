<?php

use App\Task;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
});


Route::get('/posts', 'PostsController@index')->name('posts');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comment', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create')->name('register');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy')->name('logout');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
