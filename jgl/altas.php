<html>
<head>
<title>Alta de alumnos</title>
    <link rel="icon" href="logo.ico" type="image/x-icon">

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color:#434347;
        padding: 40px;
        display: flex;
        justify-content: center;
    }

    form {
        background-color:black;
        padding: 30px 40px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        width: 350px;
    }

    h1 {
        text-align: center;
        color:white;
        margin-bottom: 25px;
    }

    label {
        display: block;
        margin-bottom: 6px;
        font-weight: 600;
        color: white;

CLos pinches favos












    }

    input[type="number"],
    input[type="text"] {
        width: 100%;
        padding: 10px 12px;
        margin-bottom: 20px;
        border: 1.8px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        transition: border-color 0.3s;
    }

    input[type="number"]:focus,
    input[type="text"]:focus {
        border-color:rgb(255, 255, 255);
        outline: none;
    }

    input[type="submit"] {
        width: 100%;
        background-color:rgb(30, 8, 233);
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
        <input type="text" id="correo" name="correo" required>

        <label for="telefono">Ingrese Teléfono:</label>
        <input type="number" id="telefono" name="telefono" required>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>
