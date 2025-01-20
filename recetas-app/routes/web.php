<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecetasController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return "Bienvenido a la página Home";
// });

Route::get('/', HomeController::class);


// Route::get('recetas', function () {
//     return "Bienvenido al recetario";
// });

// Route::get('recetas/create', function(){
//     return "Seccion para crear una receta";
// });

// Route::get('recetas/{categoria}/{receta?}', function($categoria, $receta=null){
//     if($receta==null){
//         return "Recetas de las categorias: $categoria";
//     }else{
//         return "Categoria $categoria: Detalle de la receta $receta";
//     }
// });

// Route::get('recetas', [RecetasController::class, 'index']);
// Route::get('recetas/create', [RecetasController::class, 'create']);
// Route::get('receta/{receta}/{categoria?}', [RecetasController::class, 'show']);

Route::controller(RecetasController::class)->group(function(){
    Route::get('recetas', 'index');
    Route::get('recetas/create', 'create');
    Route::get('recetas/{receta}/{categoria?}', 'show');
});