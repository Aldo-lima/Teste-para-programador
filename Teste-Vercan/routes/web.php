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

Route::resource('/pfornecedor','pfonecadoController');
Route::get('/pfornecedor-creat', 'pfonecadoController@createPessosJuridica')->name('pfornecedor.juridico');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario', function () {
    return view('formulario')->name('formulario');
});

Route::get('/pp', function () {
    return view('form_fornecedor');
});
Route::get('/home', function () {
    return view('teste');
});