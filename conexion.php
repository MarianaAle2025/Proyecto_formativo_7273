<?php
$conexion = mysqli_connect("localhost", "root", "", "conectawork");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>