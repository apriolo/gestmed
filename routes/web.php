<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\MedicosController;

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
    return view('layout.home');
});

Route::get('/empresas/cadastrar', [EmpresasController::class, 'cadastrar'])->name('empresas.cadastrar');
Route::post('/empresas/save', [EmpresasController::class, 'store'])->name('empresas.save');

Route::get('/medicos/cadastrar', [MedicosController::class, 'cadastrar'])->name('medicos.cadastrar');
Route::post('/medicos/save', [MedicosController::class, 'store'])->name('medicos.save');
