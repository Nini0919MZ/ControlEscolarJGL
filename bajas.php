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

        /* Estilos del modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.6);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #222;
            padding: 20px 30px;
            border-radius: 8px;
            text-align: center;
            color: white;
            box-shadow: 0 0 15px black;
        }

        .modal-buttons {
            margin-top: 20px;
        }

        .modal-buttons button {
            margin: 0 10px;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-confirm {
            background-color: #28a745;
            color: white;
        }

        .btn-cancel {
            background-color: #dc3545;
            color: white;
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

    <!-- Modal personalizado -->
    <div id="confirmModal" class="modal">
        <div class="modal-content">
            <p>¿Estás seguro de que deseas eliminar este contacto?</p>
            <div class="modal-buttons">
                <button class="btn-confirm">Sí</button>
                <button class="btn-cancel">Cancelar</button>
            </div>
        </div>
    </div>

    <script>
        const form = document.getElementById("formBaja");
        const modal = document.getElementById("confirmModal");
        const btnConfirm = document.querySelector(".btn-confirm");
        const btnCancel = document.querySelector(".btn-cancel");

        form.addEventListener("submit", function (e) {
            e.preventDefault();
            modal.style.display = "flex"; // Mostrar el modal
        });

        btnConfirm.addEventListener("click", function () {
            modal.style.display = "none";
            form.submit(); // Enviar el formulario si se confirma
        });

        btnCancel.addEventListener("click", function () {
            modal.style.display = "none"; // Ocultar el modal si se cancela
        });
    </script>
</body>
</html>

