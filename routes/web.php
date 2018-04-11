<?php
use App\Task;

Route::get('/welcome', function () {
     return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/minimal', function () {
    return view('minimal');
});

Route::get('/webdev', function () {
    return view('webdev');
});

Route::get('/ux', function () {
    return view('ux');
});

Route::get('/audio', function () {
    return view('audio');
});

Route::get('/tasks', function () {
    $tasks = Task::all();
    return view('tasks/index', compact('tasks'));
});
        // Route::get('/task/{task}', function ($id) {
        //     //'dd' ENDS ROUTINES DISPLAYING CONTENTS OF ROUTE REQUEST IN JSON
        //     //dd($id); 
        //     $task = DB::table('tasks')->find($id);
        //     dd($task); //JSON
        // });
      Route::get('/tasks/{task}', function ($id) {
            $task = Task::find($id);
           //dd($task);
            return view('tasks/show', compact('task'));
        });


Route::get('/contact', function () {
    return view('contact');
});