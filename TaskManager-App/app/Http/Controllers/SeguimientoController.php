<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Seguimiento;
use App\Models\Tarea;
use Illuminate\Http\Request;

class SeguimientoController extends Controller
{
    public function index(Proyecto $proyecto, Tarea $tarea)
    {
        $seguimientos = $tarea->seguimientos;
        return view('seguimientos.indexSeguimiento', compact('proyecto', 'tarea', 'seguimientos'));
    }

    public function crear(Proyecto $proyecto, Tarea $tarea)
    {
        return view('seguimientos.crearSeguimiento', compact('proyecto', 'tarea'));
    }

    public function store(Request $request, Proyecto $proyecto, Tarea $tarea)
    {
        // Validación de los campos
        $request->validate([
            'usuario' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha_inicio' => 'required|date|before_or_equal:fecha_fin',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
        ]);

        // Crear seguimiento con los datos validados, incluyendo el tarea_id
        $tarea->seguimientos()->create([
            'usuario' => $request->usuario,
            'descripcion' => $request->descripcion,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'tarea_id' => $tarea->id,  // Aquí se asigna correctamente el tarea_id
        ]);

        // Redirigir a la vista de seguimientos con un mensaje de éxito
        return redirect()->route('seguimientos.index', [$proyecto, $tarea])
            ->with('success', 'Seguimiento creado exitosamente');
    }


    public function delete(Proyecto $proyecto, Tarea $tarea, Seguimiento $seguimiento)
    {
        $seguimiento->delete();
        return redirect()->route('seguimientos.index', [$proyecto, $tarea])->with('success', 'Tarea eliminada exitosamente');
    }

}
