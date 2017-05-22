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

Route::get('todo', function () {
    return view('todo');
});



Route::get('todo', 'TodoController@index');
Route::post('todo', 'TodoController@store');
Route::get('/postDelete/{id_todo}', 'TodoController@postDelete');
Route::get('todo/{id_todo}/edit', 'TodoController@edit')->name('todo.edit');
Route::post('todo/edit', 'TodoController@update')->name('todo.update');