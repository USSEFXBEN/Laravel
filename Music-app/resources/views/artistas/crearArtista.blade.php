@extends('plantilla.plantilla')

@section('title', 'Crea una nueva tarea')

@section('buttonBack', route('festivales.index'))
@section('buttonBackText', 'Festivales')

@section('contenido')

    <div class="d-flex justify-content-center bg-success p-2 text-dark bg-opacity-25">
        <h3>Añadir un nuevo artistas al festival"{{ $festival->nombre }}"</h3>
    </div>

    <form class="container mt-2" method="post" action="{{ route('artistas.store', $festival) }}">
        @csrf
        <div class="mb-3">
            <label for="controlInputNombre" class="form-label">Nombre de la Artista</label>
            <input type="text" class="form-control" id="controlInputNombre" name="nombre" value="{{ old('nombre') }}"
                required>
        </div>
        <div class="mb-3">
            <label for="controlInputfecha_debut" class="form-label">Fecha debut</label>
            <input type="date" name="fecha_debut" class="form-control" id="fecha_debut" value="{{ old('fecha_debut') }}">
        </div>
        <div class="mb-3">
            <label for="controlInputnum_integrantes" class="form-label">Numero de integrante</label>
            <input type="number" class="form-control" id="controlInputnum_integrantes" name="num_integrantes"  value="{{ old(key: 'num_integrantes') }}" required>
        </div>
        <div class="mb-3">
            <label for="controlInputEstado" class="form-label">Estado de artista</label>
            <select class="form-control" id="controlInputEstado" name="estado" required>
                <option value="1">Asignado</option>
                <option value="0">No Asignado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('artistas.showAllArtista', $festival) }}" class="btn btn-danger">Cancelar</a>
    </form>

@endsection