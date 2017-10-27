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

Route::get('jquery-drag', function () {
    return view('jquery-drag');
});

Route::get('vue-drag', function () {
    return view('vue-drag');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
