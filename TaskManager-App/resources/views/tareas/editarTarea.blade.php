@extends('plantilla.plantilla')

@section('title', 'Edición de tareas')
@section('buttonBack', route('tareas.index', ['proyecto' => $proyecto]))
@section('buttonBackText', 'Volver a tareas')

@section('contenido')
    <h3 class="text-center m-5">Edición de la tarea '{{ $tarea->nombre }}'</h3>
    <form class="container mt-2" method="post" action="{{ route('tareas.update', ['proyecto' => $proyecto, 'tarea' => $tarea]) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="controlInputNombre" class="form-label">Nombre de la Tarea</label>
            <input type="text" class="form-control" id="controlInputNombre" name="nombre" value="{{ $tarea->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="controlInputDescp" class="form-label">Descripción</label>
            <textarea class="form-control" id="controlInputDescp" rows="3" name="descripcion" required>{{ $tarea->descripcion }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('tareas.index', ['proyecto' => $proyecto]) }}" class="btn btn-danger">Cancelar</a>
    </form>
@endsection
