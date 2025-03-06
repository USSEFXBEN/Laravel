@extends('layouts.plantilla')

@section('titulo', 'Editar Receta')

@section('contenido')
    <div class="container mt-4">
        <h1 class="text-center mb-4">Editar Receta: <span class="text-primary">{{ $receta->titulo }}</span></h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('recetas.update', [$categoria, $receta]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo', $receta->titulo) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="4">{{ old('descripcion', $receta->descripcion) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="instrucciones" class="form-label">Instrucciones</label>
                        <textarea class="form-control" id="instrucciones" name="instrucciones" rows="6">{{ old('instrucciones', $receta->instrucciones) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="tiempo_cocinado" class="form-label">Tiempo de Cocinado (minutos)</label>
                        <input type="number" class="form-control" id="tiempo_cocinado" name="tiempo_cocinado" value="{{ old('tiempo_cocinado', $receta->tiempo_cocinado) }}">
                    </div>

                    <div class="mb-3">
                        <label for="dificultad" class="form-label">Dificultad</label>
                        <input type="text" class="form-control" id="dificultad" name="dificultad" value="{{ old('dificultad', $receta->dificultad) }}">
                    </div>

                    <button type="submit" class="btn btn-success btn-lg w-100 mt-4">Actualizar Receta</button>
                </form>
            </div>
        </div>
    </div>
@endsection
