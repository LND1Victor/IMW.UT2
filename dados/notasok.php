<!DOCTYPE html>
<html>
<body>

<?php
$t = rand(0,10);
echo "<p>Su Calificacion de Notas es: ". $t;

if ($t<5) {
  echo "INSUFICIENTE!";
} 
elseif ($t==5)
 {
  echo "SUFICIENTE!";
} 
elseif ($t==6) {
    echo "BIEN!";
  }
elseif ($t<9)
 {
  echo "NOTABLE!";
} 
elseif ($t<=10) {
    echo "SOBRESALIENTE!";
  }
 

  
?>
 
</body>
</html>