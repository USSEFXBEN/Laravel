<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FestivalController;
use App\Http\Controllers\ArtistasController;
use App\Models\Festival;

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

Route::get('/', HomeController::class)->name('home');


// Rutas para Festivales
Route::controller(FestivalController::class)->group(function () {
    Route::get('festivales', 'index')->name('festivales.index');
    Route::get('festivales/create', 'createFestival')->name('festivales.crearFestival');
    Route::get('festivales/{festival}', 'showFestival')->name('festivales.mostrarFestival');
    Route::post('festivales', 'store')->name('festivales.store');
    Route::delete('festivales/{festival}', 'deleteFestival')->name('festivales.eliminarFestival');
});

// Rutas para Artistas

Route::controller(ArtistasController::class)->group(function () {
    Route::get('/festivales/{festival}/artista', 'index')->name('artistas.showAllArtista');
    Route::get('/festivales/{festival}/artistas/crear', 'createArtista')->name('artistas.crearArtista');
    Route::get('/festivales/{festival}/artistas/{artista}/editar', 'editArtista')->name('artistas.editarArtista');
    Route::put('/festivales/{festival}/artistas/{artista}', 'actualizarArtista')->name('artistas.actualizarArtista');
    Route::post('/festivales/{festival}/artistas', 'store')->name('artistas.store');
    Route::delete('/festivales/{festival}/artistas/{artista}', 'delete')->name('artistas.eliminarArtista');
});
