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
use App\Task;

Route::get('/tasks','TasksController@index');

Route::get('/tasks/{task}','TasksController@show');

Route::get('/','PostController@index');

//Route::get('/testing', function () {
//    return view('task2.index');
//});

Route::get('/testing','PostsController@index');

Route::get('/testing/create','PostsController@create');

Route::post('/testing','PostsController@store');

Route::get('/testing/{post}','PostsController@show');