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
    return redirect('index');
});

// Rutas para tabla Piezas
Route::get('/index', 'PiezasController@index');
Route::post('/store', 'PiezasController@store');
Route::get('/destroy/{id}', 'PiezasController@destroy');
Route::get('/edit/{id}', 'PiezasController@edit');
Route::post('/update', 'PiezasController@update');
