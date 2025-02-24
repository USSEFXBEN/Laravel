@extends('plantilla.plantilla')

@section('title', 'Detalles del Proyecto')

@section('contenido')

<div class="container mt-4">
    <h3>{{ $proyecto->nombre }}</h3>
    <p>{{ $proyecto->descripcion }}</p>
    <p><strong>Duración:</strong> {{ $proyecto->duracion }} días</p>

    <a href="{{ route('proyectos.index') }}" class="btn btn-secondary">Volver a la lista</a>
    <a href="{{ route('proyectos.editProyecto', $proyecto) }}" class="btn btn-primary">Editar Proyecto</a>
</div>

@endsection
