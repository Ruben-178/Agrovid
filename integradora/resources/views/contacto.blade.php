<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrovid - Contacto</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

    <header>
        <h1>AGROVID</h1>
        <p>Tienda agropecuaria dedicada a ofrecer productos e insumos de calidad para agricultores y ganaderos.</p>
    </header>

    <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/contacto">Contacto</a></li>
        </ul>
    </nav>

    <main>
        <section id="contacto">
            <h2>Contacto</h2>
            <p class="section-intro">¿Tienes dudas sobre un producto o necesitas asesoría para tu cultivo o ganado? Escríbenos.</p>
            <form id="form-contacto" novalidate>
                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre completo" required>
                </div>

                <div class="campo">
                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="email" placeholder="tucorreo@ejemplo.com" required>
                </div>

                <div class="campo">
                    <label for="asunto">Asunto</label>
                    <select id="asunto" name="asunto">
                        <option value="productos">Consulta de productos</option>
                        <option value="pedido">Estado de un pedido</option>
                        <option value="asesoria">Asesoría agropecuaria</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>

                <div class="campo">
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" rows="5" placeholder="Cuéntanos qué necesitas..." required></textarea>
                </div>

                <button type="submit">Enviar mensaje</button>

                <p id="aviso-contacto" class="aviso"></p>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Agrovid</p>
    </footer>

    <script src="{{ asset('script.js') }}"></script>
</body>
</html>