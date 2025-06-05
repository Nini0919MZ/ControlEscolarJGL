<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte por Tabla</title>
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
            width: 800px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #2c2c2c;
            color: white;
        }
        th, td {
            border: 1px solid #555;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #1a1a1a;
        }
        tr:nth-child(even) {
            background-color: #3d3d3d;
        }
        tr:hover {
            background-color: #575757;
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
        <h1>Reporte por Tabla</h1>
        <?php
        $conexion = mysqli_connect("localhost", "root", "") or
            die("<p class='error'>Problemas en la conexión</p>");
        
        mysqli_select_db($conexion, 'contacto') or
            die("<p class='error'>Problemas en la selección de la base de datos</p>");
        
        $registros = mysqli_query($conexion, "SELECT id_alumno, nombre, correo, telefono FROM alumno ORDER BY id_alumno") or
            die("<p class='error'>Problemas en el select: " . mysqli_error($conexion) . "</p>");

        if (mysqli_num_rows($registros) > 0) {
            echo '<table>';
            echo '<tr>';
            echo '<th>ID Alumno</th>';
            echo '<th>Nombre</th>';
            echo '<th>Correo</th>';
            echo '<th>Teléfono</th>';
            echo '</tr>';
        
            while ($row = mysqli_fetch_array($registros)) {
                echo '<tr>';
                echo '<td>' . $row['id_alumno'] . '</td>';
                echo '<td>' . $row['nombre'] . '</td>';
                echo '<td>' . $row['correo'] . '</td>';
                echo '<td>' . $row['telefono'] . '</td>';
                echo '</tr>';
            }
        
            echo '</table>';
        } else {
            echo "<p>No hay registros disponibles.</p>";
        }

        mysqli_close($conexion);
        ?>
        <a href="index.html" class="btn-return">Regresar al inicio</a>
    </div>
</body>
</html>
