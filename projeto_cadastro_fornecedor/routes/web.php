<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FornecedorController;
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
//Route::get('/fornecedor')

Route::any('fornecedor/filtrar',[FornecedorController::class, 'filtrar'])->name('filtrar');
Route::get( '/fornecedor', [FornecedorController::class, 'index'])->name('fornecedor.index');
Route::get( '/fornecedor/create', [FornecedorController::class, 'create'])->name('fornecedor.create');
Route::get( '/fornecedor/create/fisica', [FornecedorController::class, 'createPessoaFisica'])->name('fornecedorFisica.create');
Route::post( '/fornecedor', [FornecedorController::class, 'store'])->name('fornecedor.store');
Route::get( '/fornecedor/{id}/edit', [FornecedorController::class, 'edit'])->name('fornecedor.edit');
Route::put( '/fornecedor/{id}', [FornecedorController::class, 'update'])->name('fornecedor.update');
Route::get( '/fornecedor_/fisico/creata', 'FornecedorController@createJuridico')->name('fornrcedor.index');
Route::delete( '/fornecedor/{id}', [FornecedorController::class, 'destroy'])->name('fornecedor.destroy');
Route::get('/', function () {
    return view('index');
});

