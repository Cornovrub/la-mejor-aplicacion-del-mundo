<?php
$numeros = $_POST['valores'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculos Estadisticos - Resultado</title>

    <style>
         body {
        font-family: Arial, sans-serif;
        font-size: 13px;
        color: #000;
        margin: 0;
        padding: 0;
    }

    .contenedor {
        background-color: #d4f1d8;
        border: 2px solid #333;
        padding: 10px;
        width: 90%;
        margin: 0 auto;
    }

    h3 {
        text-align: center;
        font-size: 16px;
        margin: 2px 0 12px;
        font-weight: bold;
    }

    p {
        margin: 0 0 5px;
        line-height: 15px;
    }

    .valores {
        margin-bottom: 10px;
        line-height: 15px;
    }

    .resultado {
        margin: 0;
        line-height: 18px;
    }

    .boton {
        display: inline-block;
        margin-top: 12px;
        padding: 6px 12px;
        background-color: #4caf50;
        color: white;
        text-decoration: none;
        border-radius: 4px;
    }

    .boton:hover {
        background-color: #45a049;
    }
        
    </style>
</head>

<body>

    <div class="contenedor">

        <h3>Calculos Estadisticos - Resultado</h3>

        <p><strong>Los valores que has introducido son:</strong></p>

        <div class="valores">
            <?php
            foreach ($numeros as $numero) {
                echo $numero . "<br>";
            }
            ?>
        </div>

        <?php if (isset($_POST['suma'])) { ?>
            <div class="resultado">
                <strong>La suma de los valores es:</strong>
                <?php
                $suma = 0;
                foreach ($numeros as $numero) {
                    $suma += $numero;
                }
                echo $suma;
                ?>
            </div>
        <?php } ?>

        <?php if (isset($_POST['media'])) { ?>
            <div class="resultado">
                <strong>La media es:</strong>
                <?php
                $suma = 0;
                foreach ($numeros as $numero) {
                    $suma += $numero;
                }
                $media = $suma / count($numeros);
                echo $media;
                ?>
            </div>
        <?php } ?>

        <?php if (isset($_POST['minimo'])) { ?>
            <div class="resultado">
                <strong>El valor mas pequeño es:</strong>
                <?php
                $minimo = min($numeros);
                echo $minimo;
                ?>
            </div>
        <?php } ?>

        <?php if (isset($_POST['maximo'])) { ?>
            <div class="resultado">
                <strong>El valor mas grande es:</strong>
                <?php
                $maximo = max($numeros);
                echo $maximo;
                ?>
            </div>
        <?php } ?>

        <a href="javascript:history.back()" class="boton">
            Volver al formulario
        </a>

    </div>

</body>

</html>