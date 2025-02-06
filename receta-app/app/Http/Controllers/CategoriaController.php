<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //Muestra listado de categorias
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.indexCategoria', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.createCategoria');
    }

    public function store(Request $request)
    {

        Categoria::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion
        ]);
    }
    public function update(Request $request, Categoria $categoria)
    {
        $categoria->update($request->all());
        return redirect()->route('categorias.index');
    }
    public function edit(Categoria $categoria): View
    {
        return view('categorias.editCategoria', compact('categoria'));
    }
    public function delete(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}
