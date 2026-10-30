<?php
$numero = rand(1,10);
$v = ["un", "dous", "tres", "catro", "cinco", "seis", "sete", "oito", "nove", "dez"];

$posicion = $numero - 1;

echo "El número aleatorio es: " . $numero . "<br>";
echo "La palabra en esa posición es: " . $v[$posicion];
?>