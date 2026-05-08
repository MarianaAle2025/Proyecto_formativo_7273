<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO empleados (nombre, cedula, correo, telefono)
        VALUES ('$nombre', '$cedula', '$correo', '$telefono')";

mysqli_query($conexion, $sql);

header("Location: listado.php");
?>