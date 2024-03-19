<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CuartelController;
use App\Http\Controllers\SoldadoController;
use App\Http\Controllers\CompaniaController;
use App\Http\Controllers\CuerpoEjercitoController;

Route::get('/exito', function () {
    return view('exito');
})->name('exito');

// Rutas para Cuarteles
Route::get('/cuartel', [CuartelController::class, 'create']);
Route::post('/storeCuarteles', [CuartelController::class, 'store'])->name('cuarteles.store');

// Rutas para Soldados
Route::get('/soldado', [SoldadoController::class, 'create']);
Route::post('/storeSoldados', [SoldadoController::class, 'store'])->name('soldados.store');

// Rutas para Compañias
Route::get('compania', [CompaniaController::class, 'create']);
Route::post('/storeCompanias', [CompaniaController::class, 'store'])->name('companias.store');

// Rutas para Cuerpos de Ejército
Route::get('/cuerpos', [CuerpoEjercitoController::class, 'create']);
Route::post('/storeCuerpos', [CuerpoEjercitoController::class, 'store'])->name('cuerpos.store');
