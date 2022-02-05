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
$numeroelementos = rand (1,99);
function inicializar_array ($min, $max){
    if (!is_numeric($min) || !is_numeric($max)){
        return 0;
    
    }else{
        return rand ($min, $max);
    }
}
echo "El número especificados es $numeroelementos<br/>";

?>

</body>
</html>
