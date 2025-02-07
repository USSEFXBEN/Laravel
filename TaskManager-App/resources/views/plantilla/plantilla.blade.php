<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>@yield('titulo')</title>
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
        }

        header {
            background-color: #2C3E50;
            padding: 15px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header .logo {
            max-width: 120px;
        }

        header .titulo {
            color: #ecf0f1;
            font-size: 2.5rem;
        }

        footer {
            background-color: #2C3E50;
            padding: 20px;
            color: #ecf0f1;
            text-align: center;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header class="row m-0 align-items-center">
        <div class="col-2 text-center">
            <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="logo img-fluid">
        </div>
        <div class="col-8 text-center">
            <p class="titulo">Task Manager App</p>
        </div>
        <div class="col-2 text-end">
            <a href="{{ route('home') }}" class="btn btn-light">Volver al Home</a>
        </div>
    </header>

    @yield('contenido')

    <footer>
        <p>&copy; 2025 Task Manager App. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
