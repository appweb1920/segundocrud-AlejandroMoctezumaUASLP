<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('piezas', Piezas::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destro'
]);;

Route::get('/', 'Piezas@index');
Route::get('/piezas','Piezas@index');
Route::get('/piezas/create','Piezas@create');
Route::post('/piezas','Piezas@store');
Route::get('/piezas/{id}/edit','Piezas@edit');
Route::put('/piezas/{id}','Piezas@update');
Route::delete('/piezas/{id}','Piezas@destroy');
