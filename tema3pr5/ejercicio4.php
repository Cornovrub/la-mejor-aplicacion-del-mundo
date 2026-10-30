<?php

$numero = 5;
$binario = decbin($numero);
$binario2 = base_convert($numero,10,2);

echo $binario."<br>";
echo $binario2."<br>";

$binarioArray = [];


if ($numero == 0) {
    $binarioArray = [0];
} else {
    
    while ($numero > 0) {
        
        $binarioArray[] = $numero % 2;
        
        $numero = intdiv($numero, 2);
    }
    
    $binarioArray = array_reverse($binarioArray);
}

$resultadoBinario = implode('', $binarioArray);

echo $resultadoBinario;