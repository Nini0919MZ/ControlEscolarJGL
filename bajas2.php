<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Resultado de Baja</title>
    <link rel="icon" href="logo.ico" type="image/x-icon">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #434347;
            color: white;
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: black;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            width: 400px;
            text-align: center;
        }
        h1 {
            color: white;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            margin-bottom: 20px;
            color: white;
        }
        .error {
            color: #f44336;
            font-weight: bold;
        }
        .btn-return {
            display: block;
            width: 100%;
            background-color: black;
            color: white;
            padding: 12px;
            font-size: 16px;
            font-weight: 700;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .btn-return:hover {
            background-color: gray;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Resultado de la Baja</h1>
        <?php
        $conexion = mysqli_connect("localhost", "root", "") or die("<p class='error'>Problemas en la conexión</p>");
        mysqli_select_db($conexion, 'contacto') or die("<p class='error'>Problemas en la selección de la base de datos</p>");

        $id = $_REQUEST['id_alumno'];

        $registros = mysqli_query($conexion, "SELECT id_alumno FROM alumno WHERE id_alumno='$id'") 
            or die("<p class='error'>Problemas en el select: " . mysqli_error($conexion) . "</p>");

        if ($reg = mysqli_fetch_array($registros)) {
            mysqli_query($conexion, "DELETE FROM alumno WHERE id_alumno='$id'") 
                or die("<p class='error'>Problemas al borrar: " . mysqli_error($conexion) . "</p>");
            echo "<p>Se efectuó el borrado del contacto con ID <strong>$id</strong>.</p>";
        } else {
            echo "<p class='error'>No existe un contacto con ese ID.</p>";
        }

        mysqli_close($conexion);
        ?>
        <a href="index.html" class="btn-return">Regresar al inicio</a>
    </div>
</body>
</html>
