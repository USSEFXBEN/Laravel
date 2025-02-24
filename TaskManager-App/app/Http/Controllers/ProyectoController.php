<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    // Mostrar todos los proyectos
    public function index()
    {
        // Recuperar todos los proyectos
        $proyectos = Proyecto::all();

        // Pasar los proyectos a la vista
        return view('proyectos.indexProyecto', compact('proyectos'));
    }

    // Mostrar un proyecto específico
    public function mostrarProyecto($id)
    {
        // Recuperar el proyecto por su id
        $proyecto = Proyecto::findOrFail($id); // findOrFail asegura que si no se encuentra el proyecto se lance un error 404 "Buscado en stackoverflow"
        // Pasar el proyecto a la vista
        return view('proyectos.mostrarProyecto', compact('proyecto'));
    }

    // Mostrar el formulario para crear un proyecto
    public function crearProyecto()
    {
        return view('proyectos.crearProyecto');
    }

    // Mostrar el formulario para editar un proyecto
    public function editarProyecto($proyecto)
    {
        // Recuperar el proyecto por su id
        $proyecto = Proyecto::findOrFail($proyecto); 

        // Pasar el proyecto al formulario de edición
        return view('proyectos.editProyecto', compact('proyecto'));
    }

    // Método para almacenar un nuevo proyecto
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'duracion' => 'nullable|integer',
        ]);

        // Crear el nuevo proyecto
        Proyecto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'duracion' => $request->duracion ?? 0,
        ]);

        // Redirigir a la página de proyectos con un mensaje de éxito
        return redirect()->route('proyectos.index')->with('success', 'Proyecto creado exitosamente');
    }

    // Método para actualizar un proyecto
    public function actualizarProyecto(Request $request, Proyecto $proyecto)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'duracion' => 'nullable|integer',
        ]);

        

        // Actualizar los datos del proyecto
        $proyecto->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'duracion' => $request->duracion ?? 0,
        ]);

        // Redirigir a la página de proyectos con un mensaje de éxito
        return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado exitosamente');
    }

    public function delete(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado exitosamente');
    }

}
