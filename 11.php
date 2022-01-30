

<!DOCTYPE html>
<html>
<body>

<?php
$juego1 = 'piedra';
$juego1 = 'papel';
$juego1 = 'tijera';
$juego2 = 'piedra';
$juego2 = 'papel';
$juego2 = 'tijera';
$juego1 = rand (1,3);
$juego2 = rand (1,3);



switch ($jugador1) {
  case "1,2":
    echo "<img src='piedra.png' alt='piedra' ' width='140' height='140'>";
    
    break;
  case "2":
    echo "<img src='papel.png' alt='papel' ' width='140' height='140'>";
    
    break;
  case "3":
    echo "<img src='tijera.png'alt='tijera' ' width='140' height='140'>";
    
    break;
   
}
switch ($jugador2) {
  case "1":
    echo "<img src='piedra.png' alt='piedra' ' width='140' height='140'>";
   
    break;
  case "2":
    echo "<img src='papel.png' alt='papel' ' width='140' height='140'>";
    
    break;
  case "3":
    echo "<img src='tijera.png'alt='tijera' ' width='140' height='140'>";
   
    break;
     
  }
  while ($pJugador1 <2 && $pJugador2 <2)  {

    $jugador1 = rand(0, 2);
    $jugador2 = rand(0, 2);

  }

  if ($jugador1 == "PAPEL" && $jugador2 == "PIEDRA" || $jugador1 == "TIJERA" && $jugador2 == "PAPEL" || $jugador1 == "PIEDRA" && $jugador2 == "TIJERA") {
      echo "EL JUGADOR 1 GANA 1 PUNTO" . "<br>";
      $puntosJugador1++;
  }

  if($jugador2 == "PAPEL" && $jugador1 == "PIEDRA" || $jugador2 == "TIJERA" && $jugador1 == "PAPEL" || $jugador2 == "PIEDRA" && $jugador1 == "TIJERA"){

    echo "EL JUGADOR 2 GANA 1 PUNTO" . "<br>";
    $pJugador2++;
  

}

if($pJugador1 == 2){

  echo "<h3 style='color:blue'>HA GANADO EL JUGADOR 1 </h3>";
}else if($pJugador2 == 2){

  echo "<h3 style='color:blue'>HA GANADO EL JUGADOR 2 </h3>";
}


?>
 
</body>
</html>
 
