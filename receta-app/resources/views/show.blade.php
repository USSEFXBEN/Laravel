@extends('layouts.plantilla')

@section('titulo', 'Detalle: ' . $receta)

@section('contenido')
    <h1>Detalle de la receta: {{ $receta }}</h1>

    @if ($categoria)
        <h3>La categoría es: {{ $categoria }}</h3>
    @else
        <p>No se especificó una categoría.</p>
    @endif
@endsection
