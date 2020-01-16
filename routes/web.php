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

Route::group(['middleware'=>'admin'],function (){

//EMPRESAS
    Route::get('/empresas', ['as'=>'empresas.index', 'uses'=>'Empresas@index']);
    Route::get('/empresas/add', ['as'=>'empresas.add', 'uses'=>'Empresas@add']);
    Route::post('/empresas/add', ['as'=>'empresas.save', 'uses'=>'Empresas@save']);
    Route::get('/empresas/edit/{id}', ['as'=>'empresas.edit', 'uses'=>'Empresas@edit']);
    Route::put('/empresas/edit/{id}', ['as'=>'empresas.update', 'uses'=>'Empresas@update']);
    Route::get('/empresas/delete/{id}', ['as'=>'empresas.delete', 'uses'=>'Empresas@delete']);


//EMPREGADOS
    Route::get('/empregados', ['as'=>'empregados.index', 'uses'=>'Empregados@index']);
    Route::get('/empregados/add', ['as'=>'empregados.add', 'uses'=>'Empregados@add']);
    Route::post('/empregados/add', ['as'=>'empregados.save', 'uses'=>'Empregados@save']);
    Route::get('/empregados/edit/{id}', ['as'=>'empregados.edit', 'uses'=>'Empregados@edit']);
    Route::put('/empregados/edit/{id}', ['as'=>'empregados.update', 'uses'=>'Empregados@update']);
    Route::get('/empregados/delete/{id}', ['as'=>'empregados.delete', 'uses'=>'Empregados@delete']);
});


Route::group(['middleware'=>'auth'],function (){


});



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
