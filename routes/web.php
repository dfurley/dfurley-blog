<?php

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::get('/posts', 'PostsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


