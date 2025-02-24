@extends('plantilla.plantilla')

@section('title', 'Editar Proyecto')

@section('contenido')

<div class="container mt-4">
    <h3>Editar Proyecto</h3>

    <form action="{{ route('proyectos.actualizarProyecto', $proyecto->id) }}" method="POST">
        @csrf
        @method('PUT')
    
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $proyecto->nombre }}" required>
        </div>
    
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control">{{ $proyecto->descripcion }}</textarea>
        </div>
    
        <div class="form-group">
            <label for="duracion">Duración (en dias)</label>
            <input type="number" name="duracion" id="duracion" class="form-control" value="{{ $proyecto->duracion }}">
        </div>
    
        <button type="submit" class="btn btn-primary">Actualizar Proyecto</button>
    </form>
    

    <a href="{{ route('proyectos.index') }}" class="btn btn-secondary">Cancelar</a>
</div>

@endsection
