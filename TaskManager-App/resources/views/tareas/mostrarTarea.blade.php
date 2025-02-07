@extends('plantilla.plantilla')

@section('title', 'Mostrar Tarea')

@section('contenido')

<p class="text-center m-5">La tarea se llama: {{ $tarea->nombre }}</p>
<p class="text-center">Duracion: {{ $tarea->duracion }} horas</p>

@endsection
