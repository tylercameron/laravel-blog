<?php

use App\Task;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/tasks', function () {
    // $tasks = [
    //     'Put baby to bed',
    //     'Find a place to live',
    //     'Get stuff done'
    // ];

    // $tasks = DB::table('tasks')->get();
    // return $tasks;
    $tasks = Task::all();

    return view('tasks.index', compact('tasks'));
});

Route::get('tasks/{id}', function ($id) {
    $task = Task::find($id);

    return view('tasks.task', compact('task'));
});