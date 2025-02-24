@extends('plantilla.plantilla')

@section('title', 'Mostrar Tarea')
@section('buttonBack', route('tareas.index', ['proyecto' => $proyecto]))


@section('contenido')

    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <div class="card-body text-center">
                <h2 class="card-title text-primary">Detalles de la Tarea</h2>
                <p class="mt-3 fs-4"><strong>Nombre:</strong> {{ $tarea->nombre }}</p>
                <p class="fs-5"><strong>Duración:</strong> {{ $tarea->duracion }} horas</p>
            </div>
            <a href="{{ route('tareas.index', ['proyecto' => $proyecto]) }}" class="btn btn-danger">
                Cancelar
            </a>
        </div>
    </div>

@endsection