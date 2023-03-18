<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarrosController;

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

route::get('/carros', [CarrosController::class, 'index'])->name('carros.index');

// route::get('/carros', [CarrosContreller::class,'create'])->name('Carros.create');

// route::get('/carros/{id}', [CarrosController::class, 'show'])->name('Carros.show');

// route::get('/carros/{id}/edit', [CarrosController::class, 'edit'])->name('Carros.edit');

// route::get('/carros', [CarrosController::class, 'store'])->name('Carros.store');

// route::get('/carros/{id}', [CarrosController::class, 'update'])->name('Carros.update');

// route::get('/carros/{id}', [CarrosController::class, 'destroy'])->name('Carros.destroy');
