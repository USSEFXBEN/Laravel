@extends('plantilla.plantilla')

@section('title', 'Detalles del Festival')

@section('contenido')

<div class="container mt-4">
    <h3>{{ $festival->nombre }}</h3>
    <p>{{ $festival->genero }}</p>
    <p><strong>Fecha: </strong>{{ $festival->fecha }}</p>

    <a href="{{ route('festivales.index') }}" class="btn btn-secondary">Volver a la lista</a>
    
</div>

@endsection
