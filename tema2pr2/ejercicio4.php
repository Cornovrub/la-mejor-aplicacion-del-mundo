<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <label>Primeiro numero: </label>
    <input type="number" name="numero1" required>
    <br>
    <label>Segundo número:</label>
    <input type="number" name="numero2" required>
    <br>
    <input type="submit" value="enviar">
</form>
<?php
if (isset($_REQUEST["numero1"]) && isset($_REQUEST["numero2"])) {

    $numero1 = (int) $_REQUEST["numero1"];
    $numero2 = (int) $_REQUEST["numero2"];

    if ($numero1 > $numero2) {
        echo "O maior é: " . $numero1;
    } else {
        echo "O maior é: " . $numero2;
    }
}


?>  
</body>
</html>