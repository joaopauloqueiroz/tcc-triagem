<?php


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/user', 'HomeController@busca')->name('user.busca');
