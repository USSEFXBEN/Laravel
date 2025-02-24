@extends('plantilla.plantilla')

@section('title', 'Índice de Tareas')

@section('contenido')

<h3 class="text-center mt-5">Tareas del Proyecto: {{ $proyecto->nombre }}</h3>
<div class="d-flex justify-content-center p-2 text-dark bg-opacity-25">
    <a class="btn btn-success m-3" href="{{ route('tareas.crearTarea', $proyecto) }}" role="button">Crear Tarea</a>
</div>
@if(session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
@endif
<div class="container">
    <h4>Tareas Asociadas</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Dificultad</th>
                <th>Duración</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tareas as $tarea)
                <tr>
                    <td>{{ $tarea->nombre }}</td>
                    <td>{{ $tarea->dificultad }}</td>
                    <td>{{ $tarea->duracion }} horas</td>
                    <td>
                        @if($tarea->estado)
                            Completada
                        @else
                            Pendiente
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('tareas.mostrarTarea', [$proyecto, $tarea]) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('tareas.editarTarea', [$proyecto, $tarea]) }}" class="btn btn-dark btn-sm">Editar</a>
                        <form action="{{ route('tareas.elimiarTarea', [$proyecto, $tarea]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-primary btn-danger" type="submit">Eliminar tarea</button> <!-- Botón de borrar proyecto -->
                            
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
