<?php
$impares = 0;
$suma = 0;

for ($i = 0; $impares < 30; $i++) {

    if ($i % 2 != 0) {
        $suma += $i;
        $impares++;
    }
}

echo "<hr>";
echo "La suma de los 30 primeros impares es: " . $suma;
?>