<?php


for ($i = 1; $i <= 10; $i++) {
    
    $numeroTemp = $i;
    $binarioArray = [];
    
    
    while ($numeroTemp > 0) {
        $binarioArray[] = $numeroTemp % 2;
        $numeroTemp = intdiv($numeroTemp, 2);
    }
    
    
    $binarioArray = array_reverse($binarioArray);
    
    
    $resultadoBinario = implode('', $binarioArray);
    
    
    echo "El número $i en binario es: $resultadoBinario<br>";
}

