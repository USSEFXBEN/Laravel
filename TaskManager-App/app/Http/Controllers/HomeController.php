<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto; 

class HomeController extends Controller
{
    public function __invoke()
    {
        // Obtener todos los proyectos de la base de datos
        $proyectos = Proyecto::all();

        // Pasar los proyectos a la vista
        return view('home', compact('proyectos'));
    }
}

