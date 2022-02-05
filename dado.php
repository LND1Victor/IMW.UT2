<!DOCTYPE html>
<html>
<body>

<?php
$x = rand (1,6);

switch ($x) {
  case "1":
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/1/1b/Dice-1-b.svg' alt='Cara 1'>";
    break;
  case "2":
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/5/5f/Dice-2-b.svg' alt='Cara 2'>";
    break;
  case "3":
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/b/b1/Dice-3-b.svg' alt='Cara 3'>";
    break;
    case "4":
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/f/fd/Dice-4-b.svg' alt='Cara 4'>";
    break;
    case "5":
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/0/08/Dice-5-b.svg' alt='Cara 5'>";
    break;
    case "6":
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg' alt='Cara 6'>";
    break;
   
}
?>
 
</body>
</html>