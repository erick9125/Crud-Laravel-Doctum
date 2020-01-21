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

Route::get('/', 'AlumnosController@index')->name('home');

Route::post('/agregar', 'AlumnosController@store')->name('store');

Route::get('/editar/{id}' , 'AlumnosController@edit')->name('editar');

Route::put('/update/{id}' , 'AlumnosController@update')->name('update');

Route::delete('/eliminar/{id}', 'AlumnosController@destroy')->name('eliminar');