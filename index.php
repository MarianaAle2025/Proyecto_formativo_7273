<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro de Empleados - ConectaWork</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(135deg, #0f0f1a, #1b1b2f);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Segoe UI', sans-serif;
}

.card-form{
    background: rgba(255,255,255,0.05);
    backdrop-filter: blur(12px);
    border-radius: 20px;
    padding: 40px;
    width: 420px;
    box-shadow: 0 0 40px rgba(138,43,226,0.4);
    color: white;
}

.card-form h2{
    text-align: center;
    margin-bottom: 25px;
    font-weight: 600;
}

.form-control{
    background: rgba(255,255,255,0.08);
    border: none;
    color: white;
    border-radius: 10px;
}

.form-control::placeholder{
    color: #cfcfcf;
}

.btn-morado{
    background: #8a2be2;
    border: none;
    border-radius: 10px;
    width: 100%;
    padding: 10px;
    color: white;
    font-weight: 600;
    transition: 0.3s;
}

.btn-morado:hover{
    background: #6a1bbd;
}

.link-ver{
    display: block;
    text-align: center;
    margin-top: 15px;
    color: #b983ff;
    text-decoration: none;
}

.link-ver:hover{
    text-decoration: underline;
}
</style>
</head>

<body>

<div class="card-form">
    <h2>Registro de Empleados</h2>

    <form action="guardar.php" method="POST">
        <input class="form-control mb-3" type="text" name="nombre" placeholder="Nombre completo" required>
        <input class="form-control mb-3" type="text" name="cedula" placeholder="Cédula" required>
        <input class="form-control mb-3" type="email" name="correo" placeholder="Correo electrónico" required>
        <input class="form-control mb-3" type="text" name="telefono" placeholder="Teléfono" required>

        <button class="btn-morado">Guardar empleado</button>
    </form>

    <a class="link-ver" href="listado.php">Ver empleados registrados</a>
</div>

</body>
</html>