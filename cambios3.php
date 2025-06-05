<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Cambios realizados</title>
    <link rel="icon" href="logo.ico" type="image/x-icon">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color:#434347;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: white;
            flex-direction: column;
        }

        .mensaje {
            background-color: black;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 25px;
        }

        .btn-regresar {
            background-color: black;
            color: white;
            border: 2px solid white;
            padding: 12px 25px;
            border-radius: 6px;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-regresar:hover {
            background-color: gray;
            color: black;
            border-color: gray;
        }
    </style>
</head>
<body>

<?php
// Inicializar mensaje vacío
$mensaje = "";

// Verificamos que haya datos enviados por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conectar a la base de datos
    $conexion = mysqli_connect("localhost", "root", "") or die('Error conectando: ' . mysqli_error());

    // Seleccionar la base de datos
    mysqli_select_db($conexion, 'contacto');

    // Obtener y escapar datos
    $id_alumno = mysqli_real_escape_string($conexion, $_POST['id_alumno'] ?? '');
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre'] ?? '');
    $correo = mysqli_real_escape_string($conexion, $_POST['correo'] ?? '');
    $telefono = mysqli_real_escape_string($conexion, $_POST['telefono'] ?? '');

    // Verificar si el alumno existe
    $contacto = mysqli_query($conexion, "SELECT * FROM alumno WHERE id_alumno='$id_alumno'") or die("Error en SELECT: " . mysqli_error($conexion));

    if ($reg = mysqli_fetch_array($contacto)) {
        // Actualizar registro
        $update = mysqli_query($conexion, "UPDATE alumno SET nombre='$nombre', correo='$correo', telefono='$telefono' WHERE id_alumno='$id_alumno'") or die("Error en UPDATE: " . mysqli_error($conexion));
        $mensaje = "Registro editado correctamente.";
    } else {
        $mensaje = "El contacto no existe.";
    }

    mysqli_close($conexion);
} else {
    $mensaje = "No se enviaron datos para actualizar.";
}
?>

<div class="mensaje">
    <?php echo htmlspecialchars($mensaje); ?>
    <br><br>
    <a href="index.html" class="btn-regresar">Regresar al inicio</a>
</div>

</body>
</html>
