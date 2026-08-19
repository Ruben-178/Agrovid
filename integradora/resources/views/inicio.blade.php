<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrovid</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

    <header>
        <h1>AGROVID</h1>
        <p>Tienda agropecuaria dedicada a ofrecer productos e insumos de calidad para agricultores y ganaderos.</p>
        <button id="btn-tema">🌙 Modo oscuro</button>
    </header>

    <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="#productos">Productos</a></li>
            <li><a href="/contacto">Contacto</a></li>
            <li><a href="/productos/crear">Agregar producto</a></li>
        </ul>
    </nav>

    <main>

        @if (session('mensaje'))
            <p style="color: green;">{{ session('mensaje') }}</p>
        @endif

        <section id="productos">
            <h2>Productos de la semana</h2>
            <ul>
                @foreach ($productos as $producto)
                    <li>{{ $producto->nombre }} - Bs{{ $producto->precio }}</li>
                @endforeach
            </ul>
        </section>

        <section>
            <h2>Producto del día</h2>
            <article>
                <h3>Abono Foliar Multinutriente</h3>
                <p>Presentación 1 litro, ideal para cultivos de hoja ancha.</p>
            </article>
        </section>

        <section>
            <h2>Top 3 más vendidos</h2>
            <ol>
                <li>Fertilizante NPK 15-15-15</li>
                <li>Semilla de maíz híbrido</li>
                <li>Suplemento mineral para vacunos</li>
            </ol>
        </section>

        <section id="horarios">
            <h2>Horarios de atención</h2>
            <button id="btn-horarios">Ver horarios</button>
            <div id="lista-horarios" class="oculto">
                <p>Lunes a viernes: 8:00 a.m. – 6:00 p.m.</p>
                <p>Sábados: 8:00 a.m. – 1:00 p.m.</p>
                <p>Domingos: cerrado</p>
            </div>
        </section>

    </main>

    <footer>
        <p>&copy; 2026 Agrovid</p>
    </footer>

    <script src="{{ asset('script.js') }}"></script>
</body>
</html>