@extends('plantilla.plantilla')

@section('title', 'Festivales')

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
                <h3 style="color: #4CAF50;">Festivales</h3>
            </div>
            <div class="col-auto">
                <a href="{{ route('festivales.crearFestival') }}" class="btn btn-outline-primary">Añadir Festival</a>
                <!-- Botón de creación -->
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
            @foreach ($festivales as $festival)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm" style="border-radius: 10px; border: none;">
                        
                        <div class="card-body">
                            <h5 class="card-title" style="color: #3c09b3;">{{ $festival->nombre }}</h5>
                            <p class="card-text" style="color: #6941ae;">{{ $festival->genero }}</p>
                            <p class="card-text" style="color: #6941ae;">{{ $festival->fecha }}</p>
                            <a href="{{ route('festivales.mostrarFestival', $festival) }}"
                                class="btn btn-warning btn-block mb-2">Ver Festival</a> <!-- Botón de ver proyecto -->
                                
                            <form action="{{ route('festivales.eliminarFestival', $festival) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-primary btn-danger" type="submit">Eliminar Festival</button>
                                <!-- Botón de borrar proyecto -->

                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection