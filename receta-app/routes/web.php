<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;

// Ruta Principal
Route::get('/', HomeController::class)->name('home');

// Rutas RecetaController
Route::controller(RecetaController::class)->group(function () {
    Route::get('recetas', 'index');
    Route::get('recetas/create', 'create');
    Route::get('recetas/{receta}/{categoria?}', 'show');

    Route::get('categorias', 'index')->name('categorias.index');
    Route::get('categorias/create', 'create')->name('categorias.create');
});

// Rutas CategoriaController
Route::controller(CategoriaController::class)->group(function () {
    // Read
    Route::get('categorias', 'index')->name('categorias.index');

    // Create
    Route::get('categorias/create', 'create')->name('categorias.create');
    Route::post('categorias', 'store')->name('categorias.store');

    // Update
    Route::get('categorias/{categoria}/edit', 'edit')->name('categorias.edit');
    Route::put('categorias/{categoria}', 'update')->name('categorias.update');

    // Delete
    Route::delete('categorias/{categoria}', 'delete')->name('categorias.delete');
    Route::controller(RecetaController::class)->group(function () {
        Route::get('categorias/{categoria}/recetas', 'index')->name('recetas.index');


        Route::get('categorias/{categoria}/recetas/create', 'create')->name('recetas.create');
        Route::post('categorias/{categoria}/recetas/store', 'store')->name('recetas.store');
    });
});
