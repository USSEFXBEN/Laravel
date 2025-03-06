@extends('plantilla.plantilla')

@section('title', 'Edición de artistas')
@section('buttonBack', route('artistas.showAllArtista', ['festival' => $festival]))


@section('contenido')
    <h3 class="text-center m-5">Edición de la artista '{{ $artista->nombre }}'</h3>
    <form  class="container mt-2" method="POST" 
    action="{{ route('artistas.actualizarArtista', ['festival' => $festival, 'artista' => $artista]) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="controlInputNombre" class="form-label">Nombre de la artista</label>
            <input type="text" class="form-control" id="controlInputNombre" name="nombre" value="{{ $artista->nombre }}" >
        </div>
        
        <div class="mb-3">
            <label for="controlInput_num_integrantes" class="form-label">Numero de integrante Nuevo</label>
            <input type="text" class="form-control" id="controlInput_num_integrantes" 
            value="{{ $artista->num_integrantes }}"  name="num_integrantes">
        </div>
         
        <div class="mb-3">
            <label for="controlInputfecha_debut" class="form-label">Fecha debut de artista</label>
            <input type="date" name="fecha_debut" class="form-control" id="fecha_debut" value="{{ old('fecha_debut') }}">
        </div>
        <div class="mb-3">
            <label for="controlInputEstado" class="form-label">Estado de la artista</label>
            <select class="form-control" id="controlInputEstado" name="estado" >
                
                <option value="1">Asignado</option>
                <option value="0">No Asignado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('artistas.showAllArtista', ['festival' => $festival]) }}" class="btn btn-danger">Cancelar</a>
    </form>
@endsection
