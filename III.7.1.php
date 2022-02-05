
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

 
$componente[0] = "Procesador";
$componente[1] = "HDD";
$componente[2] = "Memoria RAM";
$componente[3] = "MotherBoard";
$componente[4] = "T.Gráfica";
$componente[5] = "Torre";
$componente[6] = "Ratón";
$componente[7] = "Teclado";
$componente[8] = "Monitor";
$componente[9] = "F.Alimentación";
$componente[10] = "Varios";

echo '<br/><u>Componentes montaje Ordenador ATX:</u> <br/>';
echo "<br>";

foreach($componente as $value ) {
     echo "$value<br/>";
  
}
echo "<br><br/>";
echo "Para mas información, diríjase a nuestra web<br/>";
echo "<a href=\https://www.pccomponentes.com\">http://www.pccomponentes.com</a>";
echo "<br><br><br>";
echo '<a href="default.asp"><img src="logopc.png" alt="pcComponentes" style="width:132px;height:62px;"></a>';


?>
</body>
</html>

