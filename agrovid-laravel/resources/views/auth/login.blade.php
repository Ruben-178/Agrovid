<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - Agrovid</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

    <header>
        <h1>AGROVID</h1>
        <p>Iniciar sesión</p>
    </header>

    <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/registro">Crear cuenta</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <h2>Iniciar sesión</h2>

            @if ($errors->any())
                <p style="color: red;">{{ $errors->first() }}</p>
            @endif

            <form action="/login" method="POST">
                @csrf

                <div class="campo">
                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="campo">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <button type="submit">Ingresar</button>
            </form>

            <p>¿No tienes cuenta? <a href="/registro">Regístrate acá</a></p>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Agrovid</p>
    </footer>

</body>
</html>
