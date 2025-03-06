@extends('plantilla.plantilla')

@section('title', 'Inicio')

@section('contenido')

    <h3 class="text-center mt-5">Bienvenido al inicio</h3>

    <div class="d-flex justify-content-center p-2 text-dark bg-opacity-25">
        <a class="btn btn-primary m-3 py-3 px-5 rounded-pill shadow-lg text-white fw-bold transition-transform transform-hover"
             href="{{ route(name: 'festivales.index') }}"
        role="button">
            Ver Festivales
        </a>
    </div>

    <div class="container mt-4">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Festivales</th>
                        <th>Artistas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($festivales as $festival)
                        <tr>
                            <td>{{ $festival->nombre }}</td>
                            <td class="text-center">
                                <a href="{{ route('artistas.showAllArtista', $festival)}}" class="btn btn-info">Ver Artistas</a> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection