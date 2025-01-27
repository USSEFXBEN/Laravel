@extends('layouts.plantilla')

@section('titulo', 'Detalle'.$receta)

@section('contenido')
    <h1>Detalle de la receta: {{$receta }}</h1>
    <?php if($cat != null): ?>
        <h3>La categoria es: {{$cat }}</h3>
    <?php endif; ?>
@endsection
