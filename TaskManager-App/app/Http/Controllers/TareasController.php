<?php
namespace App\Http\Controllers;



use Illuminate\Http\Request;

class TareasController extends Controller
{
    public function index(){
        return "Tareas no encontradas";
    }
    public function create(){
        return "Tareas creada";
    }
    public function show($tarea, $categoria=null){
        // if($categoria != null){
        //     return "Detalles de la receta $receta, de la categoria $categoria";
        // }else{
        //     return "Detalles de la receta $receta";
        // }
        return view('show', ['Tarea' => $tarea, 'categoria' => $categoria]);
    }
}


?>