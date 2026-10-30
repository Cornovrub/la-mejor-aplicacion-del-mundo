<?php
$nome= $_POST["nome"];
$apelido1= $_POST["apelido1"];
$apelido2= $_POST["apelido2"];
$data_nacemento= $_POST["datanac"];
$telefono_fixo= $_POST["telefonoF"];
$telefono_movil= $_POST["telefonoM"];
$blog= $_POST["blog"];
$sinatura= $_POST["sinatura"];

$estudos = $_POST["estudos"] ?? "";

$linguas = $_POST["linguas"] ?? [];

$practicas = isset($_POST["practica"]);
$fuma = isset($_POST["fuma"]);

echo "<h1>Datos Recibidos: </h1>";
echo "Nome: $nome<br>";
echo "Apelido1: $apelido1<br>";
echo "Apelido2: $apelido2<br>";
echo "Data nacemento: $data_nacemento<br>";
echo "Telefono fixo: $telefono_fixo<br>";
echo "Blog: $blog<br>";

echo "<h3>Sinatura: </h3>";
echo "Sinatura: $sinatura<br>";

echo "<h3>Estudos: </h3>";
echo "Sinatura: $estudos<br>";

echo "<h3>Linguas: </h3>";
foreach($linguas as $lingua){
    echo $lingua. "<br>";
}

echo "<h3>Outros:</h3>";

if ($practicas) {
    echo "Practica deporte<br>";
}

if ($fuma) { 
    echo "Fuma<br>";
}

?>