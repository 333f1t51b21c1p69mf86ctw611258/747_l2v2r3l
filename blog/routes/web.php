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

Route::get('/tasks_json', function() {
    $db_tasks = DB::table('tasks')->get();

    return $db_tasks;
});

Route::get('/tasks', function() {
    $db_tasks = DB::table('tasks')->get();

    return view('tasks.index', [
        'tasks' => $db_tasks
    ]);
});

Route::get('/tasks/{id}', function($id) {
    // dd($id);
    // dd($test);

    $task = DB::table('tasks')->find($id);

    return view('tasks.show', [
        'task' => $task
    ]);
});

Route::get('/about', function() {
    $tasks = [
        'test 1',
        'test 2',
        'test 3',
        'test 4',
        'test 5',
        'test 1',
        'test 2',
        'test 3',
        'test 4',
        'test 5'
    ];

    return view('about', [
        'name' => 'test',
        'tasks' => $tasks
    ]);
});