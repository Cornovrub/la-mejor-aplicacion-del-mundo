<?php
define('DIR_IMAXES', __DIR__.'/imaxes/');

if(!empty($_GET['nome'])) {
 $ficheiro = 'imaxes/'.$_GET['nome']. '.jpg';
 if(file_exists($ficheiro)) {
 $imaxe = file_get_contents($ficheiro);
 header("Content-type: image/jpg");
 echo $imaxe;
 }
 else header('Location: imaxes/no_encontrada.jpg');
}
else exit('Nome da imaxe non indicado!');
?>
