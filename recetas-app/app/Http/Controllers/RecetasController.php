<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetasController extends Controller
{
    public function index(){
        return "Bienvenidos a las recetas";
    }

    public function create(){
        return "Seccion para crear una receta";
    }

    public function show($receta, $categoria=null){
        if($categoria != null){
            return "Detalles de la receta $receta, de la categoria $categoria";
        }else{
            return "Detalles de la receta $receta";
        }
    }
}
