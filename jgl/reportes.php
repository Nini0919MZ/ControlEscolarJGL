<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte por Listado</title>
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
            align-items: flex-start;
            min-height: 100vh;
        }
        .container {
            background-color: black;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            width: 600px;
        }
        h1 {
            color: white;
            text-align: center;
            margin-bottom: 30px;
        }
        .record {
            border-top: 1px solid #555;
            padding: 15px 0;
        }
        p {
            margin: 5px 0;
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
            margin-top: 30px;
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
        <h1>Reporte por Listado</h1>    
        <?php        
        $conexion = mysqli_connect("localhost", "root", "") or 
            die("<p class='error'>Problemas en la conexión</p>");
        
        mysqli_select_db($conexion, 'contacto') or 
            die("<p class='error'>Problemas en la selección de la base de datos</p>");
        
        $registros = mysqli_query($conexion, 
            "SELECT id_alumno, nombre, correo, telefono FROM alumno ORDER BY id_alumno") or 
            die("<p class='error'>Problemas en el select: " . mysqli_error($conexion) . "</p>");

        if (mysqli_num_rows($registros) > 0) {
            while ($row = mysqli_fetch_array($registros)) {
                echo "<div class='record'>";
                echo "<p><strong>ID Alumno:</strong> " . $row['id_alumno'] . "</p>";
                echo "<p><strong>Nombre:</strong> " . $row['nombre'] . "</p>";
                echo "<p><strong>Correo:</strong> " . $row['correo'] . "</p>";
                echo "<p><strong>Teléfono:</strong> " . $row['telefono'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No hay registros para mostrar.</p>";
        }

        mysqli_free_result($registros);
        mysqli_close($conexion);
        ?>
        <a href="index.html" class="btn-return">Regresar al inicio</a>
    </div>
</body>
</html>
