<!DOCTYPE html>
<html lang="es">

<?php

$jugador1 = (rand(1,3));
switch ($jugador1) {
    case "1":
        echo "Ha salido piedra:";
        echo "<br><br>";
        echo "<img src='piedra.png' alt='Piedra' ' width='140' height='140'>";
        break;
    case "2":
        echo "Ha salido papel:";
        echo "<br><br>";
        echo "<img src='papel.png' alt='Papel' ' width='140' height='140'>";
        break;
    case "3":
        echo "Ha salido tijeras:";
        echo "<br><br>";
        echo "<img src='tijera.png' alt='Tijeras' ' width='140' height='140'>";
        break;
    default:
}
echo "<br><br>";
$jugador2 = (rand(1,3));
switch ($jugador2) {
    case "1":
        echo "Ha salido piedra:";
        echo "<br><br>";
        echo "<img src='piedra.png' alt='Piedra'' width='140' height='140'>";
        break;
    case "2":
        echo "Ha salido papel:";
        echo "<br><br>";
        echo "<img src='papel.png' alt='Papel'' width='140' height='140'>";
        break;
    case "3":
        echo "Ha salido tijeras:";
        echo "<br><br>";
        echo "<img src='tijera.png' alt='Tijeras'' width='140' height='140'>";
        break;
    default:
}
echo "<br><br>";
if ($jugador1 == $jugador2){
    echo "Han empatado.";
}
elseif ($jugador1 == 1 and $jugador2 == 3){
    echo "Ha ganado el jugador 1.";
}
elseif ($jugador1 == 2 and $jugador2  == 1){
    echo "Ha ganado el jugador 1.";
}
elseif ($jugador1 == 3 and $jugador2 == 2){
    echo "Ha ganado el jugador 1.";
}
else{
    echo "Ha ganado el jugador 2.";
}



?>



</body>
</html>