<?php
$conexion = new mysqli("localhost", "root", "", "micineclub");
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
