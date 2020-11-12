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

Route::get('/', function () {
    return view('welcome');
});

// Rutas para tabla Piezas
Route::get('/piezas', 'App\Http\Controllers\PiezasController@index');
Route::post('/store', 'App\Http\Controllers\PiezasController@store');
Route::get('/destroy/{id}', 'App\Http\Controllers\PiezasController@destroy');
Route::get('/edit/{id}', 'App\Http\Controllers\PiezasController@edit');
Route::post('/update', 'App\Http\Controllers\PiezasController@update');
