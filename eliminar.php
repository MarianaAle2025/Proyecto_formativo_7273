<?php
include("conexion.php");

$id = $_GET['id'];

mysqli_query($conexion, "DELETE FROM empleados WHERE id=$id");

header("Location: listado.php");
?>