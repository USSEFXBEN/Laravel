@extends('plantilla.plantilla')

@section('title', 'Crea un nuevo proyecto')

@section('buttonBack', route('proyectos.index'))
@section('buttonBackText', 'Proyectos')

@section('contenido')

    <div class="d-flex justify-content-center bg-success p-2 text-dark bg-opacity-25">
        <h3>Crea un nuevo proyecto</h3>
    </div>

    <!-- FORMULARIO PARA CREAR UN NUEVO PROYECTO -->
    <form class="container mt-2" method="post" action="{{ route('proyectos.store') }}">
        @csrf
        <div class="mb-3">
            <label for="controlInputNombre" class="form-label">Nombre del Proyecto</label>
            <input type="text" class="form-control" id="controlInputNombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="controlInputDescp" class="form-label">Descripción del Proyecto</label>
            <textarea class="form-control" id="controlInputDescp" rows="3" name="descripcion"></textarea>
        </div>
        <div class="mb-3">
            <label for="controlInputDuracion" class="form-label">Duración (en días)</label>
            <input type="number" class="form-control" id="controlInputDuracion" name="duracion" min="1" value="0">
        </div>
        <button type="submit" class="btn btn-success">Guardar Proyecto</button>
        <a href="{{ route('proyectos.index') }}" class="btn btn-danger">Cancelar</a>
    </form>

@endsection
