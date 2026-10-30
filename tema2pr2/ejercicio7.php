<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>

<form method="post">

    <label>Primera caja de texto:</label>
    <input type="number" name="num1" step="any" required>

    <br><br>

    <label>Segunda caja de texto:</label>
    <input type="number" name="num2" step="any" required>

    <br><br>

    <input type="submit" name="operacion" value="+">
    <input type="submit" name="operacion" value="-">
    <input type="submit" name="operacion" value="*">
    <input type="submit" name="operacion" value="/">

</form>

<br>

<?php

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacion = $_POST["operacion"];

    switch ($operacion) {

        case "+":
            $resultado = $num1 + $num2;
            break;

        case "-":
            $resultado = $num1 - $num2;
            break;

        case "*":
            $resultado = $num1 * $num2;
            break;

        case "/":
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = "No se puede dividir entre 0";
            }
            break;
    }
}

?>

<h2>Resultado: <?php echo $resultado; ?></h2>

</body>
</html>
