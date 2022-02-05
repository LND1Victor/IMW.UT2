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

echo "<img src='banderas.png' alt='Banderas Europa'>";

echo "<br><br><br>";
$world=array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");


foreach($world as $x => $val) {



    echo "La capital de "; echo strtoupper ("$x");echo "es";echo strtoupper ("$val") ;echo "<br>";
   
    
  }
  ?>
  
  </body>
  </html>
  