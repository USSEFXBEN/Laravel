<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Seguimiento;
use App\Models\Tarea;
use Illuminate\Http\Request;

class SeguimientoController extends Controller
{
    //Mostrar todos los seguimientos
    public function index(Proyecto $proyecto, Tarea $tarea)
    {
        $seguimientos = $tarea->seguimientos;
        return view('seguimientos.indexSeguimiento', compact('proyecto', 'seguimientos', 'tarea'));
    }
    //Crear Seguimiento

    public function crear(Proyecto $proyecto, Tarea $tarea)
    {
        return view('seguimientos.crearSeguimiento', compact('proyecto', 'tarea'));
    }

    // Almacenar una nuevo seguimiento
    public function store(Request $request, Proyecto $proyecto, Tarea $tarea)
    {
        $request->validate([
            'usuario' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date| after_or_equal:fecha_inicio'
        ]);

        $tarea->seguimientos()->create([
            'usuario' => $request->usuario,
            'descripcion' => $request->descripcion,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin
        ]);

        return redirect()->route('Seguimiento.index', [$proyecto, $tarea])->with('success', 'Seguimiento creado exitosamente');
    }
    public function delete(Proyecto $proyecto, Tarea $tarea, Seguimiento  $seguimiento)
    {
        $tarea->delete();
        return redirect()->route('seguimientos.index', $proyecto)->with('success', 'Seguimiento eliminada exitosamente');
    }
}
