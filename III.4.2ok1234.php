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
echo "<br><br>Resultados de la información solicitada <br><br><br>";
echo "<br><br><br>";
$age=array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");


foreach($age as $x=>$x_value)
   {
arsort($age);  

   echo  "Key=" . $x;
   echo "<br>";
   }
echo "<br><br>";

foreach($age as $x=>$x_value)
   {
asort($age);
      
   echo  "Value=" . $x_value;
   echo "<br>";
   }
   echo "<br><br>";

foreach($age as $x=>$x_value)
   {
krsort($age);
      
   echo  "Key=" . $x;
   echo "<br>";
   }
echo "<br><br>";
foreach($age as $x=>$x_value)
   {
ksort($age);
      
   echo  "Value=" . $x_value;
   echo "<br>";
   }
   echo "<br><br>";



?>

</body>
</html>
