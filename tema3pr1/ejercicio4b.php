<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirección</title>
</head>
<body>

<form method="get">
    <p>URL:</p>
    <input type="text" name="url">
    <input type="submit" value="Enviar">
</form>



<?php
if(!empty($_GET['url'])) {
 $url = $_GET['url'];
 $contido_html = file_get_contents($url);
 if($contido_html != false){
    echo $contido_html;
 }else{
    echo "Non se puido obter a url";
 }
}
?>
</body>
</html>