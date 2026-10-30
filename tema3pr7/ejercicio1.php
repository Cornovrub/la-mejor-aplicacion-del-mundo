<?php
$suma = 0;
$v = [
    [7, 8, 5],
    [6, 2, 6]
];

foreach($v as $fila){ 
    foreach($fila as $columna){
        $suma += $columna;
    }
}
echo "La suma total es: ".$suma;