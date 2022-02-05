<!DOCTYPE html>
<html>
<style>
        body{
            background-color: yellowgreen;
            text-align: center;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: x-large;
        }
        </style>
<body>

<?php
echo "<br><br>RESULTADOS DE TEMPERATURAS<br><br><br><br><br>";
$temperatura = array();
$media=0;
$maximo=-5;//variable del valor maximo

for ($x = 0; $x < 10; $x++) {

    $temperatura[$x]=rand(-5,50);
    $media += $temperatura[$x];//incremento donde sumo todas las temperaturas

    echo "La Temperatura $x es $temperatura[$x]<br>";

    if ($maximo < $temperatura[$x]);
    $maximo=$temperatura[$x];//actualizar el valor de maximo
}

$media=$media/10;

echo "<br><br>La media es $media";
echo "<br>El valor maximo es $maximo";

?>

</body>
</html> 