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

for($x = 0; $x < 10; $x++) {
    
  $temperatura[$x]=rand(-5,50);
 
}
sort($temperatura);

$arrlength=count($temperatura);
for($x=0;$x<$arrlength;$x++)
  {
 
  echo "<br/>La Temperatura es ";
  echo $temperatura[$x];
  }

?>
</body>
</html>
