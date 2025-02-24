@extends('plantilla.plantilla')

@section('title', 'Crea una nueva tarea')

@section('buttonBack', route('proyectos.index'))
@section('buttonBackText', 'Proyectos')

@section('contenido')

<div class="d-flex justify-content-center bg-success p-2 text-dark bg-opacity-25">
    <h3>Crea una nueva tarea en el proyecto "{{ $proyecto->nombre }}"</h3>
</div>

<form class="container mt-2" method="post" action="{{ route('tareas.store', $proyecto) }}">
    @csrf
    <div class="mb-3">
        <label for="controlInputNombre" class="form-label">Nombre de la tarea</label>
        <input type="text" class="form-control" id="controlInputNombre" name="nombre" required>
    </div>
    <div class="mb-3">
        <label for="controlInputDificultad" class="form-label">Dificultad de la tarea</label>
        <input type="text" class="form-control" id="controlInputDificultad" name="dificultad" required>
    </div>
    <div class="mb-3">
        <label for="controlInputDescp" class="form-label">Descripción de la tarea</label>
        <textarea class="form-control" id="controlInputDescp" rows="3" name="descripcion"></textarea>
    </div>  
    <div class="mb-3">
        <label for="controlInputDuracion" class="form-label">Duración de la tarea (en horas)</label>
        <input type="number" class="form-control" id="controlInputDuracion" name="duracion" required>
    </div>
    <div class="mb-3">
        <label for="controlInputEstado" class="form-label">Estado de la tarea</label>
        <select class="form-control" id="controlInputEstado" name="estado" required>
            <option value="1">Completada</option>
            <option value="0">Pendiente</option>
        </select>
    </div>
    <button  type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('proyectos.index') }}" class="btn btn-danger">Cancelar</a>
</form>

@endsection
