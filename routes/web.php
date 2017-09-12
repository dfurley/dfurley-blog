<?php

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/blog', 'PagesController@blog');
Route::get('/contact', 'PagesController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


