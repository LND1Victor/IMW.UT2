<!DOCTYPE html>
<html>
<body>

<?php
$semana = rand (1,7);

switch ($semana) {
  case "1":
    echo "ESTAMOS A LUNES!";
    break;
  case "2":
    echo "ESTAMOS A MARTES!";
    break;
  case "3":
    echo "ESTAMOS A MIERCOLES!";
    break;
    case "4":
    echo "ESTAMOS A JUEVES!";
    break;
    case "5":
    echo "ESTAMOS A VIERNES!";
    break;
    case "6":
    echo "ESTAMOS A SABADO!";
    break;
    case "7":
    echo "ESTAMOS A DOMINGO!";
    break;
  
}
?>
 
</body>
</html>