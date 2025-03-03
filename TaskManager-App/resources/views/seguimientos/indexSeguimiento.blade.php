@extends('plantilla.plantilla')
@section('title', 'Indice de Seguimientos')

@section('contenido')



    <h1 class="d-flex justify-content-center text-dark bg-opacity-25">Bienvenido al
        seguimiento de la tarea: </h1>
    <div class="d-flex justify-content-center text-dark bg-opacity-25">
        <a class="btn btn-success" href="{{ route('seguimientos.crear', [$proyecto, $tarea]) }}" role="button">Crear un nuevo
            seguimiento</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descripción</th>
                <th scope="col">Fecha Inicio</th>
                <th scope="col">Fecha Fin</th>
                <th scope="col">Usuario</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($seguimientos as $seguimiento)
                <tr>
                    <th scope="row"></th>
                    <td>{{$seguimiento->id}}</td>
                    <td>{{$seguimiento->descripcion}}</td>
                    <td>{{$seguimiento->fecha_inicio}}</td>
                    <td>{{$seguimiento->fecha_fin}}</td>
                    <td>{{$seguimiento->usuario}}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection