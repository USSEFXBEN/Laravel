@extends('layouts.plantilla')

@section('titulo', 'Recetas')

@section('contenido')
    <div class="container mt-4">
        <h1 class="text-center mb-4">Recetas de la Categoría: <span class="text-primary">{{ $categoria->nombre }}</span></h1>

        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('recetas.create', $categoria) }}" class="btn btn-success">Crear nueva receta</a>
        </div>

        <div class="row">
            @foreach ($recetas as $receta)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $receta->titulo }}</h5>
                            <p class="card-text">{{ $receta->descripcion }}</p>
                            <p><strong>Tiempo de cocinado:</strong> {{ $receta->tiempo_cocinado }} minutos</p>
                            <p><strong>Dificultad:</strong> {{ $receta->dificultad }}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('recetas.show', ['categoria' => $categoria, 'receta' => $receta]) }}" 
                               class="btn btn-info btn-sm">Ver detalles</a>
                            <a href="{{ route('recetas.edit', ['categoria' => $categoria, 'receta' => $receta]) }}" 
                               class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('recetas.delete', [$categoria, $receta]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
