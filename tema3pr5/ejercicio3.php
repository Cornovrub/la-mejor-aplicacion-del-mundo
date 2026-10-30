<?php

$notas = [
    "Carlos" => 5.6,
    "María"  => 7.8,
    "Juan"   => 7.9,
    "Ana"    => 4.6
];

$notas_total = array_sum($notas);
$alumnos_total = count($notas);

$nota_media = $notas_total / $alumnos_total;

foreach($notas as $nombre => $nota){
    if($nota > $nota_media){
        echo "$nombre con un $nota\n";
    }
}