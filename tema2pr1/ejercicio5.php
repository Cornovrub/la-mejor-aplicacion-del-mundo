<!DOCTYPE html>
<html lang="gl">
<head>
    <meta charset="UTF-8">
    <title>Cálculo da Circunferencia</title>
</head>
<body>
    <h2>Cálculo da Circunferencia</h2>
    <form action="" method="POST">
        <label for="radio">Introduce o radio:</label>
        <input type="text" name="radio" required>
        <button type="submit">Calcular</button>
    </form>
    <br>
<?php
var_dump($_REQUEST);

if(isset($_REQUEST['radio'])){
    $PI = 3.14;

    $radio = $_REQUEST['radio'];
    $circunferencia = $PI * 2 * $radio;
    print "El tamaño de la circunferencia es : " .$circunferencia;

}


