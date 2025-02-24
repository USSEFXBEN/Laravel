@extends('plantilla.plantilla')

@section('title', 'Edición de tareas')
@section('buttonBack', route('tareas.index', ['proyecto' => $proyecto]))


@section('contenido')
    <h3 class="text-center m-5">Edición de la tarea '{{ $tarea->nombre }}'</h3>
    <form  class="container mt-2" method="POST" 
    action="{{ route('tareas.actualizarTarea', ['proyecto' => $proyecto, 'tarea' => $tarea]) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="controlInputNombre" class="form-label">Nombre de la Tarea</label>
            <input type="text" class="form-control" id="controlInputNombre" name="nombre" value="{{ $tarea->nombre }}" required>
        </div>
        
        <div class="mb-3">
            <label for="controlInputDificultad" class="form-label">Dificultad de la tarea</label>
            <input type="text" class="form-control" id="controlInputDificultad" value="{{ $tarea->dificultad }}"  name="dificultad" required>
        </div>
         
        <div class="mb-3">
            <label for="controlInputDuracion" class="form-label">Duración de la tarea (en horas)</label>
            <input type="number" class="form-control" id="controlInputDuracion" value="{{ $tarea->duracion }}"  name="duracion" required>
        </div>
        <div class="mb-3">
            <label for="controlInputEstado" class="form-label">Estado de la tarea</label>
            <select class="form-control" id="controlInputEstado" name="estado" required>
                
                <option value="1">Completada</option>
                <option value="0">Pendiente</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('tareas.index', ['proyecto' => $proyecto]) }}" class="btn btn-danger">Cancelar</a>
    </form>
@endsection
