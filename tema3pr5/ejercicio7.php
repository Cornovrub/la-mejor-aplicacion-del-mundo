<?php


$fecha_actual = date("d-F-Y");
$fecha_espanol = new Datetime('22-10-2022');
$formateador = new IntlDateFormatter(
    'es_ES',
    IntlDateFormatter::LONG,
    IntlDateFormatter::NONE,
    null,
    null,
);
echo "A fecha actual é: ".$fecha_actual."<br>";

$v= ["xaneiro", "febreiro", "marzo", "abril", "maio", "xuño", "xullo", "agosto", "setembro", "outubro", "novembro", "decembro"];
$mes_actual = $v[10];
$mes=("F");
$dia = date("d");
$anio = date("Y");
echo $formateador ->format($fecha_espanol)."<br>";
echo "A fecha actual é: "." Día ".$dia." de ".$mes_actual."do"." ano ".$anio;
