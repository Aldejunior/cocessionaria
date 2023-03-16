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

route::get('/Carros', [CarrosController::class, 'index'])->name('carros.index');

route::get('/Carros', [CarrosContreller::class,'create'])->name('Carros.create');

route::get('/Carros/{id}', [CarrosController::class, 'show'])->name('Carros.show');

route::get('/Carros/{id}/edit', [CarrosController::class, 'edit'])->name('Carros.edit');

route::get('/Carros', [CarrosController::class, 'store'])->name('Carros.store');

route::get('/Carros/{id}', [CarrosController::class, 'update'])->name('Carros.update');

route::get('/Carros/{id}', [CarrosController::class, 'destroy'])->name('Carros.destroy');
