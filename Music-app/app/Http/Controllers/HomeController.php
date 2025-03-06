<?php

namespace App\Http\Controllers;

use App\Models\Festival;

class HomeController extends Controller
{
    public function __invoke()
    {
        // Obtener todos los Fesitvales de la base de datos
        $festivales = Festival::all();

        // Pasar los Festivales a la vista
        return view('home', compact('festivales'));
    }
}

