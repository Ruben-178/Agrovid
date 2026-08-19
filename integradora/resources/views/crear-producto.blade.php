<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar producto - Agrovid</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

    <header>
        <h1>AGROVID</h1>
        <p>Agregar nuevo producto</p>
    </header>

    <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/contacto">Contacto</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <h2>Nuevo producto</h2>
            <form action="/productos" method="POST">
                @csrf

                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>

                <div class="campo">
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" name="descripcion" rows="4" required></textarea>
                </div>

                <div class="campo">
                    <label for="precio">Precio</label>
                    <input type="number" step="0.01" id="precio" name="precio" required>
                </div>

                <button type="submit">Guardar producto</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Agrovid</p>
    </footer>

</body>
</html>