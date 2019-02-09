<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about','ContactController@getAbout');

Route::get('/contact','ContactController@getContact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
