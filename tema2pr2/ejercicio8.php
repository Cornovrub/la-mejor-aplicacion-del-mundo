<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dado</title>
</head>
<body>

<form method="post">
    <label>Dime un numero del 1 al 6: </label>
    <input type="number" name="numero" required>
    <br>
    <input type="submit" name="num" value="aleatorio">
</form>

<?php
if(isset($_REQUEST['num'])){


    $numero=$_REQUEST['numero'];
    
    

    $dado=rand(1,6);
    echo $dado."<br>";

    if($numero==$dado){
        echo "ACERTASTEEE ";
    }else{
        echo "NO ACERTO ";
    }
}
?>  
</body>
</html>