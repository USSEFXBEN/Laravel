@extends('plantilla.plantilla')

@section('title', 'Crea una nueva tarea')

@section('buttonBackText', 'Tareas')

@section('contenido')
    <div class="container mt-5">
        <form action="{{ route('seguimiento.store', [$proyecto,$tarea]) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" id="descripcion">
        </textarea>
            </div>

            <div class="mb-3">
                <label for="fecha_inicio" class="form-label">Fecha inicio</label>
                <input type="date" name="fecha_inicio" class="form-control" id="fecha_inicio" value=""></textarea>
            </div>
            <div class="mb-3">
                <label for="fecha_fin" class="form-label">Fecha fin</label>
                <input type="date" name="fecha_fin" class="form-control" id="fecha_fin" value=""></textarea>
            </div>
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" name="usuario" class="form-control" id="usuario" value="">
            </div>
            <button type="submit" class="btn btn-success">Guardar seguimiento</button>
        </form>
    </div>

@endsection