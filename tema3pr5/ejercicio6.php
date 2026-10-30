<?php

$temperaturas =[];
$numero = rand(1,50);

for ($dia=1; $dia <= 31; $dia++) { 
    $temperaturas[] = rand(1,50);
}
var_dump($temperaturas);
$minDiferencia = 50; 
foreach ($temperaturas as $temp) {
    $diferencia = abs($temp - $numero);
    if ($diferencia < $minDiferencia) {
        $minDiferencia = $diferencia;
    }
}


$masProximas = [];
foreach ($temperaturas as $indice => $temp) {
    $diferencia = abs($temp - $numero);
    if ($diferencia === $minDiferencia) {
        $masProximas[] = [
            'dia' => $indice, 
            'temp' => $temp
        ];
    }
}
echo "El numero es: ".$numero."<br>";
echo "Las temperaturas mas próximas son: ";
foreach($masProximas as $item){
    echo "<li>Día {$item['dia']}: {$item['temp']} °C</li>";
}