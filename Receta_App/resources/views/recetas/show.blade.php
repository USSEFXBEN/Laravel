@extends('layouts.plantilla')

@section('titulo', 'Detalles de la Receta')

@section('contenido')
    <div class="container mt-4">
        <h1 class="text-center mb-4">Detalles de la Receta: <span class="text-primary">{{ $receta->titulo }}</span></h1>

        <div class="card shadow-lg">
            <div class="card-header text-white bg-primary">
                <h5 class="card-title">{{ $receta->titulo }}</h5>
            </div>
            <div class="card-body">
                <p><strong>Descripción:</strong> <span class="text-muted">{{ $receta->descripcion }}</span></p>
                <p><strong>Instrucciones:</strong> <span class="text-muted">{{ $receta->instrucciones }}</span></p>
                <p><strong>Tiempo de Cocinado:</strong> <span class="badge bg-success">{{ $receta->tiempo_cocinado }} minutos</span></p>
                <p><strong>Dificultad:</strong> <span class="badge bg-warning text-dark">{{ $receta->dificultad }}</span></p>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('recetas.index', $receta->categoria) }}" class="btn btn-secondary">Volver a la lista de recetas</a>
            </div>
        </div>
    </div>
@endsection
