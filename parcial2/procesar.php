<?php
echo "<h2>Pedido recibido en Heladería Doña Nieve</h2>";

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$sabores = $_POST['sabores'];

echo "<p>Nombre: " . $nombre . "</p>";
echo "<p>Correo: " . $correo . "</p>";
echo "<p>Sabores pedidos: " . $sabores . "</p>";

echo "<h3>Nuestra carta</h3>";
$carta = ["Cono simple - Bs 8", 
          "Copa doble - Bs 15",
          "Litro para llevar - Bs 35"];

echo "<ul>";
foreach ($carta as $item) {
    echo "<li>" . $item . "</li>";
}
echo "</ul>";

echo "<p>Te atiende Ruben Chocamani Flores</p>";
?>
