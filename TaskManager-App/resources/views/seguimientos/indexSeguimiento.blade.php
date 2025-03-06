@extends('plantilla.plantilla')

@section('title', 'Índice de Seguimientos')

@section('contenido')

    <div class="container mt-4">
        <h1 class="text-center text-dark">Seguimientos de la tarea</h1>

        <div class="d-flex justify-content-center mb-3">
            <a class="btn btn-success" href="{{ route('seguimientos.crear', [$proyecto, $tarea]) }}">
                <i class="fas fa-plus"></i> Crear un nuevo seguimiento
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Fecha Inicio</th>
                        <th scope="col">Fecha Fin</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @forelse ($seguimientos as $seguimiento)
                        <tr>
                            <td>{{ $seguimiento->id }}</td>
                            <td>{{ $seguimiento->descripcion }}</td>
                            <td>{{ \Carbon\Carbon::parse($seguimiento->fecha_inicio)->format('d/m/Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($seguimiento->fecha_fin)->format('d/m/Y') }}</td>
                            <td>{{ $seguimiento->usuario }}</td>
                            <td>
                                <form action="{{ route('seguimientos.eliminarSeguimiento', [$proyecto, $tarea, $seguimiento]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este seguimiento?');">
                                        <i class="fas fa-trash-alt"></i> Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
