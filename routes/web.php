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
Route::get('/', 'Pacientes\PacientsController@index')->name('pacients.index');
//rota para listar um exame apenas
Route::get('/pacientes/exame/{id}', 'Pacientes\PacientsController@show')->name('pacients.show');
