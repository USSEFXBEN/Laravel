<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\SeguimientoController;
use App\Models\Seguimiento;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------| 
| Web Routes
|--------------------------------------------------------------------------| 
| Here is where you can register web routes for your application. These |
| routes are loaded by the RouteServiceProvider and all of them will      |
| be assigned to the "web" middleware group. Make something great!        |
*/

Route::get('/', HomeController::class)->name('home');





// Rutas para proyectos
Route::controller(ProyectoController::class)->group(function () {
    Route::get('proyectos', 'index')->name('proyectos.index');
    Route::get('proyectos/create', 'crearProyecto')->name('proyectos.crearProyecto');
    Route::get('proyectos/{proyecto}', 'mostrarProyecto')->name('proyectos.mostrarProyecto');
    Route::get('proyectos/edit/{proyecto}', 'editarProyecto')->name('proyectos.editProyecto');
    Route::put('proyectos/{proyecto}', 'actualizarProyecto')->name('proyectos.actualizarProyecto');
    Route::post('proyectos', 'store')->name('proyectos.store');
    Route::delete('proyectos/{proyecto}', 'delete')->name('proyectos.eliminarProyecto');
});

// Rutas de tareas dentro de un proyecto específico
Route::controller(TareaController::class)->group(function () {
    Route::get('/proyectos/{proyecto}/tareas', 'index')->name('tareas.index');
    Route::get('/proyectos/{proyecto}/tareas/crear', 'crearTarea')->name('tareas.crearTarea');
    Route::get('/proyectos/{proyecto}/tareas/{tarea}', 'mostrarTarea')->name('tareas.mostrarTarea');
    Route::get('/proyectos/{proyecto}/tareas/{tarea}/editar', 'editarTarea')->name('tareas.editarTarea');
    Route::put('/proyectos/{proyecto}/tareas/{tarea}', 'actualizarTarea')->name('tareas.actualizarTarea');
    Route::post('/proyectos/{proyecto}/tareas', 'store')->name('tareas.store');
    Route::delete('/proyectos/{proyecto}/tareas/{tarea}', 'delete')->name('tareas.elimiarTarea');
});

// Rutas para Seguimientos

Route::controller(SeguimientoController::class)->group(function () {

    Route::get('/proyectos/{proyecto}/tareas/{tarea}/seguimientos', action: 'index')->name('seguimientos.index');
    Route::get('/proyectos/{proyecto}/tareas/{tarea}/seguimientos/crear', 'crear')->name('seguimientos.crear');
    Route::post('/proyectos/{proyecto}/tareas/seguimiento', 'store')->name('seguimiento.store');
    Route::delete('/proyectos/{proyecto}/tareas/{tarea}//seguimientos/{seguimientos}/eliminar', 'deleteSeguimientos')->name('seguimientos.eliminarSeguimiento');
});
