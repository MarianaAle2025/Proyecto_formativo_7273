<?php
include("conexion.php");

$id = $_GET['id'];
$consulta = mysqli_query($conexion, "SELECT * FROM empleados WHERE id=$id");
$fila = mysqli_fetch_assoc($consulta);
?>

<!DOCTYPE html>
<html>
<head>
<title>Editar empleado</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h2>Editar empleado</h2>

<form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

    <input class="form-control mb-2" type="text" name="nombre" value="<?php echo $fila['nombre']; ?>">
    <input class="form-control mb-2" type="text" name="cedula" value="<?php echo $fila['cedula']; ?>">
    <input class="form-control mb-2" type="email" name="correo" value="<?php echo $fila['correo']; ?>">
    <input class="form-control mb-2" type="text" name="telefono" value="<?php echo $fila['telefono']; ?>">

    <button class="btn btn-success">Actualizar</button>
</form>

</body>
</html>