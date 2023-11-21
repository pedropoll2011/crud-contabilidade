<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produto', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produto/novo', [ProdutoController::class, 'novo'])->name('produtos.novo');
Route::post('/produto', [ProdutoController::class, 'store'])->name('produtos.store');
Route::get('/produto/{produto}/editar', [ProdutoController::class, 'editar'])->name('produtos.editar');
Route::put('/produto/{produto}/update', [ProdutoController::class, 'update'])->name('produtos.update');
Route::delete('/produto/{produto}/deletar', [ProdutoController::class, 'deletar'])->name('produtos.deletar');