<?php
include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

mysqli_query($conexion, "UPDATE empleados 
SET nombre='$nombre', cedula='$cedula', correo='$correo', telefono='$telefono'
WHERE id=$id");

header("Location: listado.php");
?>