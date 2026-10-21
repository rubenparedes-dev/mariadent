<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$mascota = $_POST["mascota"];
echo "<h2>Turno reservado en Veterinaria Patitas</h2>";
echo "<p>Nombre: $nombre</p>";
echo "<p>Correo: $correo</p>";
echo "<p>Mascota: $mascota</p>";
$servicios = array("Consulta general - Bs 60", "Vacuna antirrabica - Bs 40", "Bano y corte - Bs 50");
foreach ($servicios as $servicio) {
    echo "<li>$servicio</li>";
}
echo "<p>Te atiende Ruben Marcelo Paredes Morales</p>";
?>