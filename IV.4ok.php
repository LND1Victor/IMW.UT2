<!DOCTYPE html>
<html>
<style>
        body{
            background-color: yellowgreen;
            text-align: center;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: xx-large;
        }
        </style>
<body>

<?php


echo"<br><br><br><br>";
echo "RESULTADOS DE LA TAREA!!<br><br><br><br>";




function calcular_media($a,$b,$c,$d)

{
    $media=($a+$b+$c+$d)/4;
    return $media ;
    
}
echo "Los numeros son 1|2|3|4<br/>";
echo "<br/>";
echo "La media de los numeros es <br/>";
echo calcular_media(1,2,3,4);"<br>";


?>


</body>
</html>


