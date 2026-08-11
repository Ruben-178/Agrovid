<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Agrovid</title>
</head>
<body>

    <h1>Datos recibidos</h1>

    <?php
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];

        echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
        echo "<p><strong>Correo:</strong> " . $email . "</p>";
        echo "<p><strong>Mensaje:</strong> " . $mensaje . "</p>";
    ?>

</body>
</html>
