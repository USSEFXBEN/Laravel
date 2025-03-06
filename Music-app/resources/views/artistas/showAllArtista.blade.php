@extends('plantilla.plantilla')

@section('title', 'Índice de Artistas')

@section('contenido')



    <h3 class="text-center mt-5">Artistas del Festival: {{ $festival->nombre }}</h3>
    <div class="d-flex justify-content-center p-2 text-dark bg-opacity-25">
        <a class="btn btn-success m-3" href="{{ route('artistas.crearArtista', $festival) }}" role="button">Añadir
            Artista</a>
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
                    <th>Numero Integrante</th>
                    <th>Fecha Debut</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($artistas as $artista)
                    <tr>
                        <td>{{ $artista->nombre }}</td>
                        <td>{{ $artista->num_integrantes }}</td>
                        <td>{{ $artista->duracion }} horas</td>
                        <td>
                            @if($artista->estado)
                                Asignado
                            @else
                                No Asignado
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('artistas.editarArtista', [$festival, $artista]) }}"
                                class="btn btn-dark btn-sm">Editar</a>
                            <form action="{{ route('artistas.eliminarArtista', [$festival, $artista]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-primary btn-danger" type="submit">Eliminar tarea</button>
                                <!-- Botón de borrar proyecto -->


                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection