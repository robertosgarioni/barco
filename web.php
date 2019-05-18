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
Route::get('/boats', 'BarcoController1@index')
    ->name('listar_barcos');
Route::get('/boats/criar', 'BarcoController1@create')
    ->name('form_criar_barco');
Route::post('/boats/criar', 'BarcoController1@store');
Route::delete('/barco/{id}', 'BarcoController1@destroy');
