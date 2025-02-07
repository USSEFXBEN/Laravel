@extends('plantilla.plantilla')

@section('title', 'Proyectos')

@section('buttonBack', route('home'))
@section('buttonBackText', 'Home')

@section('contenido')

<!-- Contenedor principal -->
<div class="container mt-4">
    <!-- Sección de logo y título -->
    <div class="row justify-content-between align-items-center">
        <div class="col-auto">
            
        </div>
        <div class="col text-center">
            <h3 style="color: #4CAF50;">Proyectos</h3> 
        </div>
        <div class="col-auto">
            <a href="{{ route('proyectos.crearProyecto') }}" class="btn btn-outline-primary">Nuevo Proyecto</a> <!-- Botón de creación -->
        </div>
    </div>

    <!-- Mensajes de sesión -->
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Contenedor de proyectos -->
    <div class="row mt-4">
        @foreach ($proyectos as $proyecto)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm" style="border-radius: 10px; border: none;">
                    
                    <div class="card-body">
                        <h5 class="card-title" style="color: #2C3E50;">{{ $proyecto->nombre }}</h5> 
                        <p class="card-text" style="color: #7F8C8D;">{{ $proyecto->descripcion }}</p> 
                        <a href="{{ route('proyectos.mostrarProyecto', $proyecto) }}" class="btn btn-warning btn-block mb-2">Ver Proyecto</a> <!-- Botón de ver proyecto -->
                        <a href="{{ route('proyectos.editProyecto', $proyecto) }}" class="btn btn-primary btn-block">Editar Proyecto</a> <!-- Botón de editar proyecto -->
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
