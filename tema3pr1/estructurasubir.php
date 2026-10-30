<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos</title>

    <style>
        body {
            text-align: center;
            background-color: #ceb008;
        }
    </style>
</head>

<body>

    <form enctype="multipart/form-data" action="recibir.php" method="post">

        <h1>SUBIR ARCHIVOS A UN SERVIDOR</h1>

        <h2>Para subir carpetas, debes comprimirlas primero</h2>

        <div class="campo">

            <input type="hidden" name="MAX_FILE_SIZE" value="1000000">

            <label for="userfile">Seleccione archivo:</label>
            <input name="userfile" id="userfile" type="file" required>

        </div>

        <br>

        <input type="submit" value="Subir archivo">

        <p>Escoge el archivo que quieres subir pulsando el botón Examinar...</p>

    </form>

</body>

</html>