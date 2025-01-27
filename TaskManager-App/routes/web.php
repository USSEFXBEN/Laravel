<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;
use App\Http\Controllers\TareasController;


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


Route::controller(TareasController::class)->group(function(){
    Route::get('tareas', 'index');
    Route::get('tareas/create','create');
    Route::get('tareas/{tarea}/{Categoria?}','show');
});
