<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de temperatura</title>
</head>
<body>

<h2>Convertir Fahrenheit a Celsius</h2>

<form method="post">
    <label>Dame una temperatura en Fahrenheit:</label>
    <input type="number" name="fahrenheit" step="any" required>
    <br><br>
    <input type="submit" name="convertir_celsius" value="Convertir a Celsius">
</form>

<br>

<h2>Convertir Celsius a Fahrenheit</h2>

<form method="post">
    <label>Dame una temperatura en Celsius:</label>
    <input type="number" name="celsius" step="any" required>
    <br><br>
    <input type="submit" name="convertir_fahrenheit" value="Convertir a Fahrenheit">
</form>

<br>

<?php

if (isset($_REQUEST["convertir_celsius"])) {

    $fahrenheit = $_REQUEST["fahrenheit"];

    $celsius = ($fahrenheit - 32) * 5 / 9;

    echo "Los grados Celsius son: " . $celsius . " °C";
}

if (isset($_REQUEST["convertir_fahrenheit"])) {

    $celsius = $_REQUEST["celsius"];

    $fahrenheit = ($celsius * 9 / 5) + 32;

    echo "Los grados Fahrenheit son: " . $fahrenheit . " °F";
}

?>

</body>
</html>