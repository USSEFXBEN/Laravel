<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use App\Models\Artista;
use Illuminate\Http\Request;

class ArtistasController extends Controller
{
    public function index(Festival $festival)
    {
        $artistas = $festival->artistas()->get();
        return view('artistas.showAllArtista', data: compact('festival', 'artistas'));
    }
    public function createArtista(Festival $festival)
    {
        return view('artistas.crearArtista', compact('festival'));
    }
    public function store(Request $request, Festival $festival)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'num_integrantes' => 'nullable|integer',
            'fecha_debut' => 'required|date',
            'estado' => 'required|boolean'
        ]);

        $festival->artistas()->create([
            'nombre' => $request->nombre,
            'num_integrantes' => $request->num_integrantes,
            'fecha_debut' => $request->fecha_debut,
            'estado' => $request->estado
        ]);

        return redirect()->route('artistas.showAllArtista', $festival)->with('success', 'artista creado exitosamente');
    }

    public function editArtista(Festival $festival, Artista $artista)
    {
        return view('artistas.editarArtista', compact('festival', 'artista'));
    }

    // Actualizar una tarea
    public function actualizarArtista(Request $request, Festival $festival, Artista $artista)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'num_integrantes' => 'nullable|integer',
            'fecha_debut' => 'date',
            'estado' => 'boolean'
        ]);

        $artista->update([
            'nombre' => $request->nombre,
            'num_integrantes' => $request->num_integrantes,
            'fecha_debut' => $request->fecha_debut,
            'estado' => $request->estado
        ]);

        return redirect()->route('artistas.showAllArtista', $festival)->with('success', 'Artista actualizado exitosamente');
    }

    public function delete(Festival $festival, Artista $artista)
    {
        $artista->delete();
        return redirect()->route('artistas.showAllArtista', $festival)->with('success', 'Artista eliminado exitosamente');
    }
}
