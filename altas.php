<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta de alumnos</title>
    <link rel="icon" href="logo.ico" type="image/x-icon">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #434347;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: black;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            color: white;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: white;
        }

        input[type="number"],
        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 20px;
            border: 1.8px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
            transition: border-color 0.3s;
        }

        input[type="number"]:focus,
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus {
            border-color: white;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            background-color: rgb(30, 8, 233);
            color: white;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: gray;
        }
    </style>
</head>
<body>
    <form action="altas2.php" method="post">
        <h1>Alta de Contactos</h1>

        <label for="id_alumno">Ingrese Id_Alumno:</label>
        <input type="number" id="id_alumno" name="id_alumno" required>

        <label for="nombre">Ingrese Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="correo">Ingrese Correo:</label>
        <input type="email" id="correo" name="correo" required placeholder="ejemplo@correo.com">

        <label for="telefono">Ingrese Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required pattern="[0-9]{10}" title="El teléfono debe tener exactamente 10 dígitos" placeholder="1234567890">

        <input type="submit" value="Registrar">
    </form>
</body>
</html>
