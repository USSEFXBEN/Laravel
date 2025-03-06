<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use App\Models\Categoria;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    public function index(Categoria $categoria)
    {
        // Obtenemos todas las recetas de la categoría especificada
        $recetas = $categoria->recetas()->get();

        // Llamada a la vista de recetas, pasando las recetas y la categoría
        return view('recetas.index', compact('recetas', 'categoria'));
    }

    public function create(Categoria $categoria)
    {
        // Llamada a la vista para crear una receta, pasando la categoría
        return view('recetas.create', compact('categoria'));
    }

    public function store(Request $request, Categoria $categoria)
    {
        // Validación de los campos del formulario
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'instrucciones' => 'nullable|string',
            'tiempo_cocinado' => 'nullable|integer',
            'dificultad' => 'nullable|string',
        ]);

        // Crear la receta asociada a la categoría
        $categoria->recetas()->create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'instrucciones' => $request->instrucciones,
            'tiempo_cocinado' => $request->tiempo_cocinado,
            'dificultad' => $request->dificultad,
        ]);

        // Redirección a la lista de recetas de la categoría con un mensaje de éxito
        return redirect()->route('recetas.index', $categoria)->with('success', 'Receta creada exitosamente');
    }

    public function show(Categoria $categoria, Receta $receta)
    {
        return view('recetas.show', compact('receta', 'categoria'));
    }


    public function edit(Categoria $categoria, Receta $receta)
    {


        return view('recetas.edit', compact('receta', 'categoria'));
    }


    public function update(Request $request, Categoria $categoria, Receta $receta)
    {

        // Validación de los campos del formulario
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'instrucciones' => 'nullable|string',
            'tiempo_cocinado' => 'nullable|integer|max:4',
            'dificultad' => 'nullable|string',
        ]);

        // Actualizar los datos de la receta
        $receta->update([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'instrucciones' => $request->instrucciones,
            'tiempo_cocinado' => $request->tiempo_cocinado,
            'dificultad' => $request->dificultad,
        ]);

        // Redirigir con un mensaje de éxito
        return redirect()->route('recetas.index', [$categoria, $receta])->with('success', 'Receta actualizada exitosamente');
    }

    public function delete(Request $request, Categoria $categoria, Receta $receta)
    {
        // Eliminar la receta
        $receta->delete();

        // Redirigir con un mensaje de éxito
        return redirect()->route('recetas.index', [$categoria, $receta])->with('success', 'Receta eliminada exitosamente');
    }
}
