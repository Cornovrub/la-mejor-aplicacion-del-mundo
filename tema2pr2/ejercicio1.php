<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Práctica 2 - Cálculo de medias</title>

        <style type="text/css">

            body{
                background-color: #FFFDCA;
                text-align: center;
            }

            #titulo {
                border-top: 1px solid #aaa;
                border-bottom: 1px solid #aaa;
            }

            table {
                margin: 3em auto;
                background-color: #9BCD9A;
                border: 1px solid #000;
                border-collapse: collapse;
            }

            td {border: 5px ridge #aaa;}

            .error { font-weight: bold; color: #c00}


        </style>
    </head>
    <body>
        <div id="titulo"><h1>Boletín de notas</h1></div>

        <h2>Resultados obtenidos</h2>

        <?php
        // 1. Recogemos datos. Si no se recibe el control correspondiente a una 
        // nota, asignamos a la variable una cadena vacía
        
        $prog1 = (isset($_REQUEST['prog1'])) ? $_REQUEST['prog1'] : "";
        $prog2 = (isset($_REQUEST['prog2'])) ? $_REQUEST['prog2'] : "";
        $prog3 = (isset($_REQUEST['prog3'])) ? $_REQUEST['prog3'] : "";
        $an1 = (isset($_REQUEST['an1'])) ? $_REQUEST['an1'] : "";
        $an2 = (isset($_REQUEST['an2'])) ? $_REQUEST['an2'] : "";
        $an3 = (isset($_REQUEST['an3'])) ? $_REQUEST['an3'] : "";
        $sis1 = (isset($_REQUEST['sis1'])) ? $_REQUEST['sis1'] : "";
        $sis2 = (isset($_REQUEST['sis2'])) ? $_REQUEST['sis2'] : "";
        $sis3 = (isset($_REQUEST['sis3'])) ? $_REQUEST['sis3'] : "";
        $fol1 = (isset($_REQUEST['fol1'])) ? $_REQUEST['fol1'] : "";
        $fol2 = (isset($_REQUEST['fol2'])) ? $_REQUEST['fol2'] : "";
        $fol3 = (isset($_REQUEST['fol3'])) ? $_REQUEST['fol3'] : "";
        $ret1 = (isset($_REQUEST['ret1'])) ? $_REQUEST['ret1'] : "";
        $ret2 = (isset($_REQUEST['ret2'])) ? $_REQUEST['ret2'] : "";
        $ret3 = (isset($_REQUEST['ret3'])) ? $_REQUEST['ret3'] : "";
        
        
        // 2. Comprobamos que todos los datos son números entre 0 y 10. Si no es
        // así, notificamos individualmente cada error que encontremos.
        $error = false;
        
        if (!is_numeric($prog1) || $prog1 < 0 || $prog1 > 10){
            echo "<p class=\"error\">";
            echo "Programación-Trimestre 1: La nota debe estar entre 0 y 10";
            echo "</p>\n";
            $error = true;
        }
        
        if (!is_numeric($prog2) || $prog2 < 0 || $prog2 > 10){
            echo "<p class=\"error\">";
            echo "Programación-Trimestre 2: La nota debe estar entre 0 y 10";
            echo "</p>\n";
            $error = true;
        }
        
        if (!is_numeric($prog3) || $prog3 < 0 || $prog3 > 10){
            echo "<p class=\"error\">";
            echo "Programación-Trimestre 1: La nota debe estar entre 0 y 10";
            echo "</p>\n";
            $error = true;
        }
        
        if (!is_numeric($an1) || $an1 < 0 || $an1 > 10){
            echo "<p class=\"error\">";
            echo "Análisis-Trimestre 1: La nota debe estar entre 0 y 10";
            echo "</p>\n";
            $error = true;
        }
        
        if (!is_numeric($an2) || $an2 < 0 || $an2 > 10){
            echo "<p class=\"error\">";
            echo "Análisis-Trimestre 2: La nota debe estar entre 0 y 10";
            echo "</p>\n";
            $error = true;
        }
        
        if (!is_numeric($an3) || $an3 < 0 || $an3 > 10){
            echo "<p class=\"error\">";
            echo "Análisis-Trimestre 3: La nota debe estar entre 0 y 10";
            echo "</p>\n";
            $error = true;
        }
        
        if (!is_numeric($sis1) || $sis1 < 0 || $sis1 > 10){
            echo "<p class=\"error\">";
            echo "Sistemas-Trimestre 1: La nota debe estar entre 0 y 10";
            echo "</p>\n";
            $error = true;
        }
        
        if (!is_numeric($sis2) || $sis2 < 0 || $sis2 > 10){
            echo "<p class=\"error\">";
            echo "Sistemas-Trimestre 2: La nota debe estar entre 0 y 10";
            echo "</p>\n";
            $error = true;
        }
        
        if (!is_numeric($sis3) || $sis3 < 0 || $sis3 > 10){
            echo "<p class=\"error\">";
            echo "Sistemas-Trimestre 3: La nota debe estar entre 0 y 10";
            echo "</p>\n";
            $error = true;
        }
        
        if (!is_numeric($fol1) || $fol1 < 0 || $fol1 > 10){
            echo "<p class=\"error\">";
            echo "FOL-Trimestre 1: La nota debe estar entre 0 y 10";
            echo "</p>\n";
            $error = true;
        }
        
        if (!is_numeric($fol2) || $fol2 < 0 || $fol2 > 10){
            echo "<p class=\"error\">";
            echo "FOL-Trimestre 2: La nota debe estar entre 0 y 10";
            echo "</p>\n";
            $error = true;
        }
        
        if (!is_numeric($fol3) || $fol3 < 0 || $fol3 > 10){
            echo "<p class=\"error\">";
            echo "FOL-Trimestre 3: La nota debe estar entre 0 y 10";
            echo "</p>\n";
            $error = true;
        }
        
        if (!is_numeric($ret1) || $ret1 < 0 || $ret1 > 10){
            echo "<p class=\"error\">";
            echo "RET-Trimestre 1: La nota debe estar entre 0 y 10";
            echo "</p>\n";
            $error = true;
        }
        
        if (!is_numeric($ret2) || $ret2 < 0 || $ret2 > 10){
            echo "<p class=\"error\">";
            echo "RET-Trimestre 2: La nota debe estar entre 0 y 10";
            echo "</p>\n";
            $error = true;
        }
        
        if (!is_numeric($ret3) || $ret3 < 0 || $ret3 > 10){
            echo "<p class=\"error\">";
            echo "RET-Trimestre 3: La nota debe estar entre 0 y 10";
            echo "</p>\n";
            $error = true;
        }
        
        // 3. Si todos los datos comprobados en el paso anterior son correctos,
        // calculamos la media de cada módulo en los tres trimestres, la media
        // total del curso y mostramos los resultados.
        
        if (!$error){
            $prog = ($prog1 + $prog2 + $prog3) / 3;
            $progFormat = number_format($prog, 2);


            $an = ($an1 + $an2 + $an3) / 3;
            $anFormat = number_format($an, 2);


            $sis = ($sis1 + $sis2 + $sis3) / 3;
            $sisFormat = number_format($sis, 2);


            $fol = ($fol1 + $fol2 + $fol3) / 3;
            $folFormat = number_format($fol, 2);


            $ret = ($ret1 + $ret2 + $ret3) / 3;
            $retFormat = number_format($ret, 2);

            $media = ($prog + $an + $sis + $fol + $ret) / 5;
            $mediaFormat = number_format($media, 2);
            
            echo <<<SALIDA
            
            <table>
                <tr>
                    <td></td>
                    <td>Trimestre 1</td>
                    <td>Trimestre 2</td>
                    <td>Trimestre 3</td>
                    <td>Media</td>
                </tr>
                <tr>
                    <td>PROGRAMACIÓN</td>
                    <td>$prog1</td>
                    <td>$prog2</td>
                    <td>$prog3</td>
                    <td>$progFormat</td>
                </tr>
                <tr>
                    <td>ANÁLISIS</td>
                    <td>$an1</td>
                    <td>$an2</td>
                    <td>$an3</td>
                    <td>$anFormat</td>
                </tr>
                <tr>
                    <td>SISTEMAS</td>
                    <td>$sis1</td>
                    <td>$sis2</td>
                    <td>$sis3</td>
                    <td>$sisFormat</td>
                </tr>
                <tr>
                    <td>FOL</td>
                    <td>$fol1</td>
                    <td>$fol2</td>
                    <td>$fol3</td>
                    <td>$folFormat</td>
                </tr>
                <tr>
                    <td>RET</td>
                    <td>$ret1</td>
                    <td>$ret2</td>
                    <td>$ret3</td>
                    <td>$retFormat</td>
                </tr>
            </table>

            <p>La media total es: $mediaFormat</p>
SALIDA;
        }
        ?>
        
    </body>
</html>