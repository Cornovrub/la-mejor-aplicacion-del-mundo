<?php

if (isset($_POST["comunidad"])) {
    $comunidad = $_POST["comunidad"];
} else {
    $comunidad = "";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Provincias</title>

    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>PROVINCIAS DE LA COMUNIDAD AUTÓNOMA</h2>

    <h3>
        <?php echo $comunidad; ?>
    </h3>

    <?php

    switch ($comunidad) {

        case "ANDALUCIA":

            echo "ALMERIA<br>";
            echo "CADIZ<br>";
            echo "CORDOBA<br>";
            echo "GRANADA<br>";
            echo "HUELVA<br>";
            echo "JAEN<br>";
            echo "MALAGA<br>";
            echo "SEVILLA<br>";

            break;


        case "ARAGON":

            echo "HUESCA<br>";
            echo "TERUEL<br>";
            echo "ZARAGOZA<br>";

            break;


        case "ASTURIAS":

            echo "ASTURIAS<br>";

            break;


        case "BALEARES":

            echo "ILLES BALEARS<br>";

            break;


        case "CANARIAS":

            echo "LAS PALMAS<br>";
            echo "SANTA CRUZ DE TENERIFE<br>";

            break;


        case "CANTABRIA":

            echo "CANTABRIA<br>";

            break;


        case "CASTILLA_LA_MANCHA":

            echo "ALBACETE<br>";
            echo "CIUDAD REAL<br>";
            echo "CUENCA<br>";
            echo "GUADALAJARA<br>";
            echo "TOLEDO<br>";

            break;


        case "CASTILLA_LEON":

            echo "AVILA<br>";
            echo "BURGOS<br>";
            echo "LEON<br>";
            echo "PALENCIA<br>";
            echo "SALAMANCA<br>";
            echo "SEGOVIA<br>";
            echo "SORIA<br>";
            echo "VALLADOLID<br>";
            echo "ZAMORA<br>";

            break;


        case "CATALUNA":

            echo "BARCELONA<br>";
            echo "GIRONA<br>";
            echo "LLEIDA<br>";
            echo "TARRAGONA<br>";

            break;


        case "COMUNIDAD_VALENCIANA":

            echo "ALICANTE<br>";
            echo "CASTELLON<br>";
            echo "VALENCIA<br>";

            break;


        case "EXTREMADURA":

            echo "BADAJOZ<br>";
            echo "CACERES<br>";

            break;


        case "GALICIA":

            echo "A CORUÑA<br>";
            echo "LUGO<br>";
            echo "OURENSE<br>";
            echo "PONTEVEDRA<br>";

            break;


        case "MADRID":

            echo "MADRID<br>";

            break;


        case "MURCIA":

            echo "MURCIA<br>";

            break;


        case "NAVARRA":

            echo "NAVARRA<br>";

            break;


        case "PAIS_VASCO":

            echo "ALAVA<br>";
            echo "GUIPUZCOA<br>";
            echo "VIZCAYA<br>";

            break;


        case "LA_RIOJA":

            echo "LA RIOJA<br>";

            break;
    }

    ?>

</body>

</html>
