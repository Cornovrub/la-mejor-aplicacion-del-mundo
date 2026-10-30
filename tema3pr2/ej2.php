<?php
$cantidad = $_POST['cantidad'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Cálculos estadísticos - Formulario</title>
</head>

<body style="background-color: white; font-family: Arial;">

    <form action="ej3.php" method="POST">

    <div style="background-color: #d9edf4; border: 5px ridge #c5b9a4; padding: 10px 5px;">
        <h3 style="text-align: center;">Cálculos estadísticos - Formulario</h3>

        <p>Escribe los valores y marca las casillas correspondientes a los calculos que quieres.</p>
    <?php
        for($i = 1; $i <= $cantidad; $i++){
            echo "Numero $i: ";
            echo "<input type='number' name='valores[]' required>";
            echo "<br>";

            }
    ?>
            <br><br>

            <input type="checkbox" id="suma" name="suma" value="sumas">
            <label for="suma">Suma</label>
            <input type="checkbox" id="media" name="media" value="medias">
            <label for="media">Media</label>
            <input type="checkbox" id="maximo" name="maximo" value="maximo">
            <label for="maximo">Maximo</label>
            <input type="checkbox" id="minimo" name="minimo" value="minimo">
            <label for="minimo">Minimo</label>

            <button>Calcular entrada</button>
    </div>

    </form>

</body>

</html>