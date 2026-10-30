<?php
$resultado_sum = [];
$resultado_res = [];
$v = [
    [7, 8],
    [6, 2],
    [3, 7]
];

$b = [
    [7, 8],
    [6, 2],
    [3, 7]
];

function mostrarArray($array) {
    echo "<table border='1' cellpadding='10'>";

    foreach ($array as $fila) {
        echo "<tr>";

        foreach ($fila as $valor) {
            echo "<td>" . $valor . "</td>";
        }

        echo "</tr>";
    }

    echo "</table><br>";
}
for ($i=0; $i < 2; $i++) { 
    for ($j=0; $j < 2; $j++) { 
       $resultado_sum[$i][$j] = $v[$i][$j] + $b[$i][$j];
    }
}

for ($i=0; $i < 2; $i++) { 
    for ($j=0; $j < 2; $j++) { 
       $resultado_res[$i][$j] = $v[$i][$j] - $b[$i][$j];
    }
}

?>


<!DOCTYPE html>
<html lang="gl">
<head>
    <meta charset="UTF-8">
    <title>Operacións con arrays</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            color: #222;
            padding: 20px;
        }

        h3 {
            color: #174a6e;
        }

        table {
            border-collapse: collapse;
            background-color: white;
            border: 2px solid #174a6e;
            margin-bottom: 20px;
        }

        td {
            border: 1px solid #174a6e;
            background-color: #dceeff;
            color: #17324d;
            padding: 12px 20px;
            text-align: right;
        }

        .orixinais {
            display: flex;
            gap: 40px;
            align-items: flex-start;
        }
    </style>
</head>

<body>

    <h2>Arrays orixinais</h2>

    <div class="orixinais">
        <div>
            <h3>Array V</h3>
            <?php mostrarArray($v); ?>
        </div>

        <div>
            <h3>Array B</h3>
            <?php mostrarArray($b); ?>
        </div>
    </div>

    <h2>Arrays de resultados</h2>

    <h3>Suma dos arrays</h3>
    <?php mostrarArray($resultado_sum); ?>

    <h3>Resta dos arrays</h3>
    <?php mostrarArray($resultado_res); ?>

</body>
</html>

