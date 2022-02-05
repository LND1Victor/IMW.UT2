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
echo "<u>RESULTADOS DE LA TAREA 1 y 2</u> !!<br><br><br><br>";

function tablas($inicio,$fin){
    for ($i=$inicio;$i<=$fin;$i++){
echo "La tabla de multiplicar de $i"; multiplicar ($i);
echo "<br><br/>";
    }
    
}

function multiplicar($num){
    for ($i=1;$i<=10;$i++){
echo"<br/>$i x $num =".$i*$num;
    }
    
}
do{
$inicio=rand(1,10);
$fin=rand(1,10);
    
}
while($inicio>$fin);
tablas($inicio,$fin);

//fin del ejercicio 1,2

echo"<br><br><br><br>";
echo "<u>RESULTADOS DE LA TAREA 3</u> !!<br><br><br><br>";
$numeroelementos = rand (1,99);
function inicializar_array ($min, $max){
    if (!is_numeric($min) || !is_numeric($max)){
        return 0;
    
    }else{
        return rand ($min, $max);
    }
}
echo "El número especificados es $numeroelementos<br/>";

//fin del ejercicio 3

echo"<br><br><br><br>";
echo "<u>RESULTADOS DE LA TAREA 4</u> !!<br><br><br><br>";




function calcular_media($a,$b,$c,$d)

{
    $media=($a+$b+$c+$d)/4;
    return $media ;
    
}
echo "Los numeros son 1|2|3|4<br/>";
echo "<br/>";
echo "La media de los numeros es <br/>";
echo calcular_media(1,2,3,4);"<br>";

//fin del ejercicio 4

echo"<br><br><br><br>";
echo "<u>RESULTADOS DE LA TAREA 5</u> !!<br><br><br><br>";

echo "<center>";
echo "<table>";
echo "<tr>";


$participantes = array('0' => "Victor", '1' => "Gabriel", '2' => "Juan Félix", '3' => "Evelyn", '4' => "Javier", '5' => "Brian", '6' => "Iván" );

foreach($participantes as $x => $x_value)
{

print "<td> $x </td> ";
print "<td> $x_value </td>";
echo  "</tr>";

}


echo "</tr>";
echo "</table>";
echo "</center>";
echo "<hr>";



?>
</body>
</html>








