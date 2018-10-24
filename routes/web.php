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

Route::get('/', function () {
    return view('welcome');

Route::get('/', function(){
    return view('principal');
});
Route::get('/tipo', 'TipoController@index');
Route::get('/tipo/novo', 'TipoController@create');
Route::get('/tipo/apagar/{id}', 'TipoController@destroy');
Route::get('/tipo/editar/{id}', 'TipoController@edit');
Route::post('/tipo/editar/{id}', 'TipoController@update');
Route::post('/tipo', 'TipoController@store');

Route::get('/alimento', 'AlimentoController@index');
Route::get('/alimento/novo', 'AlimentoController@create');
Route::get('/alimento/editar/{id}', 'AlimentoController@edit');
Route::get('/alimento/apagar/{id}', 'AlimentoController@destroy');
Route::post('/alimento', 'AlimentoController@store');