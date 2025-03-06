@extends('plantilla.plantilla')

@section('title', 'Crea un nuevo festival')

@section('buttonBack', route('festivales.index'))
@section('buttonBackText', 'Festivales')

@section('contenido')

    <div class="d-flex justify-content-center bg-success p-2 text-dark bg-opacity-25">
        <h3>Crea un nuevo proyecto</h3>
    </div>

    <!-- FORMULARIO PARA CREAR UN NUEVO PROYECTO -->
    <form class="container mt-2" method="post" action="{{ route('festivales.store') }}">
        @csrf
        <div class="mb-3">
            <label for="controlInputNombre" class="form-label">Nombre del Festival</label>
            <input type="text" class="form-control" id="controlInputNombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="controlInputDescp" class="form-label">Genero</label>
            <input type="text" class="form-control" id="controlInputGenero" name="genero" required>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha Inicio</label>
            <input type="date" name="fecha" class="form-control" id="fecha" value="{{ old('fecha') }}">
        </div>
        <button type="submit" class="btn btn-success">Guardar Proyecto</button>
        <a href="{{ route('festivales.index') }}" class="btn btn-danger">Cancelar</a>
    </form>

@endsection
