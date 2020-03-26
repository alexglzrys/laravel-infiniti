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

Route::get('/', 'HomeController@index')->name('home.index');
// Ruta para almacenar el registro de un cliente
Route::post('/', 'HomeController@register')->name('home.register');
// Ruta para visualizar clientes por agencia
Route::get('/agency/{id}/customers', 'HomeController@customers')->name('home.customers');
