<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Librería El Lápiz')</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

    <header>
        <h1>@yield('h1', 'Librería El Lápiz')</h1>
    </header>

    <nav>
        <ul>
            <li><a href="/libros">Ver catálogo</a></li>
            <li><a href="/libros/nuevo">Agregar libro</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Integradora - Ruben Chocamani Flores - 18 de agosto de 2026</p>
    </footer>

</body>
</html>