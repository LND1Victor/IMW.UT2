
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

echo "<table>";
echo "<tr>";


    $datos_personales[] = "Victor";
    $datos_personales[] = "Cruz";
    $datos_personales[] = "38";
    $datos_personales[] = "España";  
    $datos_personales[] = "Varón";
    

    $cantidad = count($datos_personales);

    

    for($i=0;$i < $cantidad; $i++){

    echo "$datos_personales[$i] <br> " ;
    }

echo "<hr> Agregándole un elemento al array <br>";
    

      $datos_personales[] = "Casado";
         $cantidad = count($datos_personales);
          for($i=0;$i < $cantidad; $i++){

    echo "<td>$datos_personales[$i] <br></td> " ;
    }

    echo "</tr>";
    echo "</table>";

?>
</body>
</html>
