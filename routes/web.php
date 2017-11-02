<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('jquery-drag', function () {
    return view('drag-drop/jquery');
});

Route::get('vue-drag', function () {
    return view('drag-drop/vue');
});

Route::get('general-form', function () {
    return view('general-form/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('user/index/primary', 'ProfileController@primaryIndex'); 

Route::get('user/index/secondary', 'ProfileController@index'); 

Route::get('user/profile/{profile?}','ProfileController@show'); 
