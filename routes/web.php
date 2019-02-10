<?php

// Route::get('/', function () {
//     return view('pages.index');
// });

Route::get('/','PagesController@getIndex');

Route::get('/about','PagesController@getAbout');

Route::get('/contact','PagesController@getContact');

Route::get('/services','PagesController@getServices');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostsController');
