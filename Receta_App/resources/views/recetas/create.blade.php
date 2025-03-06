@extends('layouts.plantilla')

@section('titulo', 'Crear Receta')

@section('contenido')
    <div class="container mt-4">
        <h1 class="text-center mb-4">Crear Nueva Receta en la Categoría: <span class="text-primary">{{ $categoria->nombre }}</span></h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('recetas.store', $categoria) }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="4">{{ old('descripcion') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="instrucciones" class="form-label">Instrucciones</label>
                        <textarea class="form-control" id="instrucciones" name="instrucciones" rows="6">{{ old('instrucciones') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="tiempo_cocinado" class="form-label">Tiempo de Cocinado (minutos)</label>
                        <input type="number" class="form-control" id="tiempo_cocinado" name="tiempo_cocinado" value="{{ old('tiempo_cocinado') }}">
                    </div>

                    <div class="mb-3">
                        <label for="dificultad" class="form-label">Dificultad</label>
                        <input type="text" class="form-control" id="dificultad" name="dificultad" value="{{ old('dificultad') }}">
                    </div>

                    <button type="submit" class="btn btn-success btn-lg w-100 mt-4">Guardar Receta</button>
                </form>
            </div>
        </div>
    </div>
@endsection
