<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use Illuminate\Http\Request;

class FestivalController extends Controller
{
    // Mostrar todos los proyectos
    public function index()
    {
        // Recuperar todos los proyectos
        $festivales = Festival::all();

        // Pasar los festivales a la vista
        return view('festivales.indexFestival', compact('festivales'));
    }

    //Crear un festival
    public function createFestival()
    {
        return view('festivales.crearFestival');
    }
    // Método para almacenar un nuevo festival
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'fecha' => 'nullable|date',
        ]);

        // Crear el nuevo proyecto
        Festival::create([
            'nombre' => $request->nombre,
            'genero' => $request->genero,
            'fecha' => $request->fecha,
        ]);

        // Redirigir a la página de proyectos con un mensaje de éxito
        return redirect()->route('festivales.index')->with('success', 'Festival añadido exitosamente');
    }

    //metodo de show 
    public function showFestival(Festival $festival)
    {
        return view('festivales.mostrarFestival', compact('festival'));
    }
    public function deleteFestival(Festival $festival)
    {

        $festival->delete();
        return redirect()->route(route: 'festivales.index')->with('success', 'Festival eliminado exitosamente');    }
}
