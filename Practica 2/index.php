<?php
$conexion = mysqli_connect("localhost","root","","utes") 
or die("Error en la conexión");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];

    $sql = "INSERT INTO usuarios (nombre, correo, edad) 
            VALUES ('$nombre', '$correo', '$edad')";

    mysqli_query($conexion, $sql);

    echo "<script>alert('Datos guardados correctamente');</script>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario con BD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card p-4 shadow">
        <h2 class="text-center mb-4">Registro de Usuario</h2>

        <form method="POST">

            <div class="mb-3">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Apellido</label>
                <input type="email" name="correo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Matricula</label>
                <input type="number" name="edad" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">
                Guardar
            </button>

        </form>
    </div>
</div>

</body>
</html>