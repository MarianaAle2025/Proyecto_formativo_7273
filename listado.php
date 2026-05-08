<?php
include("conexion.php");
$resultado = mysqli_query($conexion, "SELECT * FROM empleados");
?>

<!DOCTYPE html>
<html>
<head>
<title>Empleados registrados</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h2>Empleados registrados</h2>

<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Cédula</th>
<th>Correo</th>
<th>Teléfono</th>
<th>Acciones</th>
</tr>

<?php while($fila = mysqli_fetch_assoc($resultado)) { ?>
<tr>
<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['cedula']; ?></td>
<td><?php echo $fila['correo']; ?></td>
<td><?php echo $fila['telefono']; ?></td>
<td>
    <a href="editar.php?id=<?php echo $fila['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
    <a href="eliminar.php?id=<?php echo $fila['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
</td>
</tr>
<?php } ?>
</table>

<a href="index.php" class="btn btn-primary">Volver</a>

</body>
</html>