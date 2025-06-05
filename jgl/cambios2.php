<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Cambios2</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #434347;
            padding: 40px;
            display: flex;
            justify-content: center;
        }

        form {
            background-color: black;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 350px;
            color: white;
        }

        h1 {
            text-align: center;
            color: white;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: white;
        }

        input[type="number"],
        input[type="text"],
        input[type="email"] {
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

        input[type="number"]:focus,
        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: rgb(255, 255, 255);
        }

        input[type="submit"] {
            width: 100%;
            background-color: rgb(0, 0, 0);
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

        .mensaje {
            color: white;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<?php
$id_alumno = $_REQUEST['id_alumno'] ?? '';

if ($id_alumno) {
    $conexion = mysqli_connect("localhost", "root", "") or die('Problema conectando porque: ' . mysqli_error());

    mysqli_select_db($conexion, 'contacto');

    $contacto = mysqli_query($conexion, "SELECT * FROM alumno WHERE id_alumno='$id_alumno'") or die("Problemas con query");

    if ($reg = mysqli_fetch_array($contacto)) {
?>
        <form id="formCambios" action="cambios3.php" method="post">
            <h1>Editar Contacto</h1>

            <label for="id_alumno">ID:</label>
            <input type="number" id="id_alumno" name="id_alumno"
                   value="<?php echo htmlspecialchars($reg['id_alumno']); ?>" readonly>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre"
                   value="<?php echo htmlspecialchars($reg['nombre']); ?>"
                   pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+" title="Solo letras y espacios" required>

            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo"
                   value="<?php echo htmlspecialchars($reg['correo']); ?>" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono"
                   value="<?php echo htmlspecialchars($reg['telefono']); ?>"
                   pattern="[0-9]{10}" title="El teléfono debe tener 10 dígitos" required>

            <input type="submit" name="ok" value="Editar">
        </form>
<?php
    } else {
        echo '<div class="mensaje">El contacto no existe.</div>';
    }

    mysqli_close($conexion);
} else {
    echo '<div class="mensaje">No se recibió ningún ID para buscar.</div>';
}
?>

<script>
    document.getElementById("formCambios")?.addEventListener("submit", function (e) {
        const nombre = document.getElementById("nombre").value.trim();
        const telefono = document.getElementById("telefono").value.trim();
        const correo = document.getElementById("correo").value.trim();

        if (!/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/.test(nombre)) {
            alert("El nombre solo debe contener letras y espacios.");
            e.preventDefault();
        }

        if (!/^\d{10}$/.test(telefono)) {
            alert("El teléfono debe tener exactamente 10 dígitos.");
            e.preventDefault();
        }

        if (!correo.includes("@") || !correo.includes(".")) {
            alert("El correo debe tener un formato válido.");
            e.preventDefault();
        }
    });
</script>

</body>
</html>
