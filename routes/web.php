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

Route::get('/','PagesController@index');

Route::get('/register','PagesController@register');



//[1],[3]
Route::post('test', [
    'uses' => 'PagesController@createUser'
]);

//[4]login
Route::get('/login','PagesController@login');
//[4]
Route::post('/login', [
    'uses' => 'PagesController@loginUser'
]);



//[5.1b]
Route::post("user","PagesController@createTask");

