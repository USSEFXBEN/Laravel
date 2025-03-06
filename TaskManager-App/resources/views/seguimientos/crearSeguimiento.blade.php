@extends('plantilla.plantilla')

@section('title', 'Crear Seguimiento')

@section('contenido')
    <div class="container mt-5">
        <h2 class="mb-3">Crear un nuevo Seguimiento</h2>

        <!-- Mostrar mensajes de error si los hay -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('seguimiento.store', [$proyecto, $tarea]) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" name="usuario" class="form-control" id="usuario" value="{{ old('usuario') }}">
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" id="descripcion">{{ old('descripcion') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
                <input type="date" name="fecha_inicio" class="form-control" id="fecha_inicio" value="{{ old('fecha_inicio') }}">
            </div>

            <div class="mb-3">
                <label for="fecha_fin" class="form-label">Fecha Fin</label>
                <input type="date" name="fecha_fin" class="form-control" id="fecha_fin" value="{{ old('fecha_fin') }}">
            </div>

            <button type="submit" class="btn btn-success">Guardar seguimiento</button>
        </form>
    </div>
@endsection
