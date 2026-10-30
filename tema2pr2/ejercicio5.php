<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <label>Dame un angulo dado en radianes: </label>
    <input type="number" name="radianes" required>
    <br>
    <input type="submit" value="Convertir a grados">

<?php

if (isset($_REQUEST["radianes"])) {

    $radianes = (float) $_REQUEST["radianes"];

    $grados = rad2deg($radianes);

    echo "O ángulo en graos é: " . $grados;
}

?>
</form>