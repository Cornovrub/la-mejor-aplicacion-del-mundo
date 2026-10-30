
<?php

$nome = $_POST["nome"];
$apelido1 = $_POST["apelido1"];
$apelido2 = $_POST["apelido2"];
$data_nacemento = $_POST["datanac"];
$telefono_fixo = $_POST["telefonoF"];
$telefono_movil = $_POST["telefonoM"];
$blog = $_POST["blog"];
$sinatura = $_POST["sinatura"];

$estudos = $_POST["estudos"] ?? "";
$linguas = $_POST["linguas"] ?? [];

$practicas = isset($_POST["practica"]);
$fuma = isset($_POST["fuma"]);



$url = $nome . $apelido1 . $apelido2;

$url = strtolower($url);


$urlBlog = "http://persoal.mundoblog.com/" . urlencode($url) . "/";

$sinatura =  strip_tags($_POST["sinatura"],"<b><i><u><br><hr>");

echo "<h1>Datos Recibidos: </h1><br>";

echo "Nome: $nome<br><br>";

echo "Apelido1: $apelido1<br><br>";

echo "Apelido2: $apelido2<br><br>";

echo "Data nacemento: $data_nacemento<br><br>";

echo "Telefono fixo: $telefono_fixo<br><br>";

echo "Blog: $blog<br><br>";

echo "Sinatura: $sinatura<br><br>";


echo "URL personal: $urlBlog<br><br>";

echo "Imaxes: ";

?>





