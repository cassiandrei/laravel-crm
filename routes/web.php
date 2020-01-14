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
Route::get('/empresas', function () {
    return view('empresas');
});

Route::get('/empresas/add', function () {
    return view('empresa_add');
});

Route::post('/empresas/add', function () {
    return view('empresa_add_post');
});

Route::get('/empresas/edit/{id}', function () {
    return view('empresa_edit');
});

//EMPREGADOS
