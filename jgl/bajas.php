<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Dar de baja</title>
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
            text-align: left;
        }
        h1 {
            color: white;
            text-align: center;
            margin-bottom: 20px;
        }
        label, input {
            display: block;
            width: 100%;
            margin-bottom: 15px;
        }
        input[type="number"] {
            padding: 10px;
            border-radius: 6px;
            border: none;
            font-size: 16px;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #222;
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
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bajas de Contactos</h1>
        <form id="formBaja" action="bajas2.php" method="post">
            <label for="id_alumno">Ingrese el ID del contacto a borrar:</label>
            <input type="number" name="id_alumno" id="id_alumno" required>
            <input type="submit" value="Borrar">
        </form>
    </div>

    <script>
        // Confirmación antes de enviar el formulario
        document.getElementById("formBaja").addEventListener("submit", function(e) {
            const confirmado = confirm("¿Estás seguro de que deseas eliminar este contacto?");
            if (!confirmado) {
                e.preventDefault(); // Cancela el envío si el usuario elige "Cancelar"
            }
        });
    </script>
</body>
</html>
