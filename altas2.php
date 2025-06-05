<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Dado de alta</title>
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
$conexion = mysqli_connect('localhost', 'root', '') or die("Problemas en la conexion");

mysqli_select_db($conexion, 'contacto') or die("Problemas en la seleccion de la base de datos");

mysqli_query($conexion, "INSERT INTO alumno(id_alumno,nombre,correo,telefono) values
   ('$_REQUEST[id_alumno]','$_REQUEST[nombre]','$_REQUEST[correo]','$_REQUEST[telefono]')")
   or die("Problemas en el insert: " . mysqli_error($conexion));

mysqli_close($conexion);
?>

<div class="mensaje">
    El alumno fue registrado.
    <br>
    <br>
    
<a href="index.html" class="btn-regresar">Regresar al inicio</a>
</div>


</body>
</html>
