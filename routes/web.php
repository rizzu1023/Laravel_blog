<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about','PagesController@getAbout');

Route::get('/contact','PagesController@getContact');

Route::get('/services','PagesController@getServices');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
