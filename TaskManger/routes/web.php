<?php

use App\Http\Controllers\TareasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class);
Route::controller(TareasController::class)->group(function(){
    Route::get('tarea', 'index');
    Route::get('tareas/create', 'create');
    Route::get('tarea/{tarea}/{categoria?}', 'show');
});
