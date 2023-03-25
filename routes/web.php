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

Route::get('/carros', [CarrosController::class, 'index'])->name('carros.index');

Route::get('/carros/novo', [CarrosController::class,'create'])->name('carros.create');

Route::get('/carros/{carro}', [CarrosController::class, 'show'])->name('carros.show');

Route::get('/carros/{carro}/editar', [CarrosController::class, 'edit'])->name('carros.edit');

Route::post('/carros', [CarrosController::class, 'store'])->name('carros.store');

Route::put('/carros/{carro}', [CarrosController::class, 'update'])->name('carros.update');

route::delete('/carros/{carro}', [CarrosController::class, 'destroy'])->name('carros.destroy');
