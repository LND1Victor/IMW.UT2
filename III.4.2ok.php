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
arsort($age);

foreach($age as $x=>$x_value)
   {
      
   echo  "Key=" . $x;
   echo "<br>";
   }
?>

</body>
</html>
