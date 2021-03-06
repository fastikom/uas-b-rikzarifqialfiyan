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

Route::group(['middleware'=>'cors','prefix'=>'api'], function (){
    Route::get('book', 'BookController@index');
    Route::get('book/{id}', 'BookController@show');
    Route::post('book', 'BookController@store');
    Route::post('book/{id}', 'BookController@update');
    Route::post('book/delete/', 'BookController@destroy');
});
