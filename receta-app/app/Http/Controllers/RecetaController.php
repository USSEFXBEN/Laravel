<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;
use App\Models\Categoria;


class RecetaController extends Controller
{
    public function index(Categoria $categoria)
    {              
        //$recetas = Receta::where('categoria_id', $categoria['id'])->get();
       
        $recetas = $categoria->recetas()->get();      
       
        return view('index', compact('recetas', 'categoria'));
    }




    public function create(){
        return "Seccion para crear una receta";
    }

    public function show($receta, $categoria=null){
        // if($categoria != null){
        //     return "Detalles de la receta $receta, de la categoria $categoria";
        // }else{
        //     return "Detalles de la receta $receta";
        // }
        return view('show', ['receta' => $receta, 'categoria' => $categoria]);
    }
    
}
