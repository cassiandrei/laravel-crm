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
});

//EMPRESAS
Route::get('/empresas', ['as'=>'empresas.index', 'uses'=>'Empresas@index']);

Route::get('/empresas/add', ['uses'=>'Empresas@add']);

Route::post('/empresas/delete/{id}', ['uses'=>'Empresas@delete']);

Route::put('/empresas/edit/{id}', ['uses'=>'Empresas@edit']);

//EMPREGADOS
