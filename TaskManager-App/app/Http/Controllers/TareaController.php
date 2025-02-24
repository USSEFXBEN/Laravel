<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    // Mostrar todas las tareas de un proyecto
    public function index(Proyecto $proyecto)
    {
        $tareas = $proyecto->tareas; // Relación con tareas del proyecto
        return view('tareas.indexTarea', compact('tareas', 'proyecto'));
    }

    // Mostrar el formulario para crear una tarea
    public function crearTarea(Proyecto $proyecto)
    {
        return view('tareas.crearTarea', compact('proyecto'));
    }

    // Almacenar una nueva tarea
    public function store(Request $request, Proyecto $proyecto)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'dificultad' => 'required|string|max:255',
            'duracion' => 'required|integer',  
            'estado' => 'required|boolean'
        ]);
    
        $proyecto->tareas()->create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'dificultad' => $request->dificultad,
            'duracion' => $request->duracion,
            'estado' => $request->estado
        ]);
    
        return redirect()->route('tareas.index', $proyecto)->with('success', 'Tarea creada exitosamente');
    }

    // Mostrar una tarea específica
    public function mostrarTarea(Proyecto $proyecto, Tarea $tarea)
    {
        return view('tareas.mostrarTarea', compact('tarea'));
    }

    // Mostrar el formulario para editar una tarea
    public function editarTarea(Proyecto $proyecto, Tarea $tarea)
    {
        return view('tareas.editarTarea', compact('tarea', 'proyecto'));
    }

    // Actualizar una tarea
    public function actualizarTarea(Request $request, Proyecto $proyecto, Tarea $tarea)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'dificultad' => 'required|string|max:255',
            'duracion' => 'required|integer',  
            'estado' => 'required|boolean',    
        ]);

        $tarea->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'dificultad' => $request->dificultad,
            'duracion' => $request->duracion,
            'estado' => $request->estado,
        ]);

        return redirect()->route('tareas.index', $proyecto)->with('success', 'Tarea actualizada exitosamente');
    }
    public function delete(Proyecto $proyecto, Tarea $tarea)
    {
        $tarea->delete();
        return redirect()->route('tareas.index', $proyecto)->with('success', 'Tarea eliminada exitosamente');
    }

}
