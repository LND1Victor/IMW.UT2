<!DOCTYPE html>
<html>
<style>
        body{
            background-color: yellowgreen;
            text-align: center;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: xx-large;
        }
        img{
            width: 60px;
            height: 60 px;
        }
        </style>
<body>

<?php

echo "<br><br>";
$jugador1 = array();
$tirada=rand(1,10);
$jugador2 = array();
$w1=0;
$w2=0;
echo "Player 1 <br/>";
for($x=0;$x<=$tirada;$x++) {
    $jugador1[$x]=rand(1,6);
    switch($jugador1[$x]){
        case "1":
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/1/1b/Dice-1-b.svg' alt='Es 1'>";
            break;
        case "2":
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/5/5f/Dice-2-b.svg' alt='Es 2' >";
            break;
        case "3":
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/b/b1/Dice-3-b.svg' alt='Es 3' >";
            break;
        case "4":
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/f/fd/Dice-4-b.svg' alt='Es 4' >";
            break;
        case "5":
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/0/08/Dice-5-b.svg' alt='Es 5' >";
            break;
        case "6":
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg' alt='Es 6' >";
            break;
        case "7":
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg' alt='Es 6' >";
            break;
        case "8":
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg' alt='Es 6' >";
            break;
        case "9":
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg' alt='Es 6' >";
            break;
        case "10":
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg' alt='Es 6' >";
            break;
   
    }
}
echo "<br/>";
echo "Player 2 <br/>";
for($x=0;$x<=$tirada;$x++) {
    $jugador2[$x]=rand(1,6);
    switch($jugador2[$x]){
        case "1":
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/1/1b/Dice-1-b.svg' alt='Es 1' >";
            break;
        case "2":
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/5/5f/Dice-2-b.svg' alt='Es 2' >";
            break;
        case "3":
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/b/b1/Dice-3-b.svg' alt='Es 3' >";
            break;
        case "4":
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/f/fd/Dice-4-b.svg' alt='Es 4' >";
            break;
        case "5":
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/0/08/Dice-5-b.svg' alt='Es 5' >";
            break;
        case "6":
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg' alt='Es 6' >";
            break;
        case "7":
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg' alt='Es 6' >";
            break;
        case "8":
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg' alt='Es 6' >";
            break;
        case "9":
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg' alt='Es 6' >";
            break;
        case "10":
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg' alt='Es 6' >";
            break;
    }
  
}
echo "<br><br>";

for($x=0;$x<$tirada;$x++) {
    if($jugador1[$x]<$jugador2[$x]){
        echo "Jugada jugador 1 es menor que jugador 2, por lo que gana jugador2<br/>";
        $w2++;
    }elseif($jugador1[$x]>$jugador2[$x]){
        echo "Jugada jugador 1 es mayor que jugador 2,  por lo que gana jugador1<br/>";
        $w1++;
    }else{
        echo "Jugada jugador 1 es igual que jugador 2 <br/>";
    }
}
if($w1>$w2){
    echo "El jugador1 ha ganado el juego con ", $w1, " victorias<br/>";
    echo "El jugador2 ha perdido el juego con ", $w2, " victorias<br/>";
}elseif($w1<$w2){
    echo "El jugador2 ha ganado el juego con ", $w2, " victorias<br/>";
    echo "El jugador1 ha perdido el juego con ", $w1, " victorias<br/>";
}else{
    echo "jugador1 y jugador2 han empatado con ", $w1, " y ", $w2, " Victorias respectivamente";
}


?>

</body>
</html>