<?php

if (isset($_FILES["userfile"])) {

    $archivo = $_FILES["userfile"];

    echo "Nombre del archivo: " . $archivo["name"] . "<br>";
    echo "Tamaño: " . $archivo["size"] . " bytes<br>";
    echo "Tipo: " . $archivo["type"] . "<br>";
    echo "Archivo temporal: " . $archivo["tmp_name"] . "<br>";
    echo "Código de error: " . $archivo["error"] . "<br><br>";

    if ($archivo["error"] == 0) {

        move_uploaded_file(
            $archivo["tmp_name"],
            "uploads/" . $archivo["name"]
        );

        echo "Archivo subido correctamente.";

    } else {

        echo "Error al subir el archivo.";

    }

} else {

    echo "No se ha recibido ningún archivo.";

}

?>