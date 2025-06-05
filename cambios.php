<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Editar Registros</title>
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
            width: 350px;
            text-align: center;
        }

        h1 {
            color: white;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: white;
            text-align: left;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 20px;
            border: 1.8px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.3s;
            background-color: #2a2a2a;
            color: white;
            outline: none;
        }

        input[type="number"]:focus {
            border-color: rgb(194, 194, 194);
        }

        input[type="submit"] {
            width: 100%;
            background-color: black;
            color: white;
            padding: 12px;
            font-size: 16px;
            font-weight: 700;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: gray;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cambios de Contactos</h1>
        <form action="cambios2.php" method="post">
         <label for="id_alumno">  <center>Ingrese el ID del contacto a cambiar:</center></label>
            <input type="number" id="id_alumno" name="id_alumno" required>

            <input type="submit" name="ok" value="BUSCAR">
        </form>
    </div>
</body>
</html>
