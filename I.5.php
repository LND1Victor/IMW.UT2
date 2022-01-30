

<!DOCTYPE html>
<html>
<body>

<?php
$dado1 = rand (1,6);
$dado2 = rand (1,6);

switch ($dado1) {
  case "1":
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/1/1b/Dice-1-b.svg' alt='Cara 1' ' width='140' height='140'>";
    break;
  case "2":
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/5/5f/Dice-2-b.svg' alt='Cara 2' ' width='140' height='140'>";
    break;
  case "3":
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/b/b1/Dice-3-b.svg' alt='Cara 3' ' width='140' height='140'>";
    break;
    case "4":
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/f/fd/Dice-4-b.svg' alt='Cara 4' ' width='140' height='140'>";
    break;
    case "5":
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/0/08/Dice-5-b.svg' alt='Cara 5' ' width='140' height='140'>";
    break;
    case "6":
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg' alt='Cara 6' ' width='140' height='140'>";
    break;
   
}
switch ($dado2) {
    case "1":
      echo "<img src='https://upload.wikimedia.org/wikipedia/commons/1/1b/Dice-1-b.svg' alt='Cara 1' ' width='140' height='140'>";
      break;
    case "2":
      echo "<img src='https://upload.wikimedia.org/wikipedia/commons/5/5f/Dice-2-b.svg' alt='Cara 2' ' width='140' height='140'>";
      break;
    case "3":
      echo "<img src='https://upload.wikimedia.org/wikipedia/commons/b/b1/Dice-3-b.svg' alt='Cara 3' ' width='140' height='140'>";
      break;
      case "4":
      echo "<img src='https://upload.wikimedia.org/wikipedia/commons/f/fd/Dice-4-b.svg' alt='Cara 4' ' width='140' height='140'>";
      break;
      case "5":
      echo "<img src='https://upload.wikimedia.org/wikipedia/commons/0/08/Dice-5-b.svg' alt='Cara 5' ' width='140' height='140'>";
      break;
      case "6":
      echo "<img src='https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg' alt='Cara 6' ' width='140' height='140'>";
      break;
     
  }

if ($dado1 == $dado2) {
    print "  <p>Ha sacado una pareja de $dado1.</p>\n";
} else {
    print "  <p>No ha sacado pareja. El valor más alto es " . max($dado1, $dado2,) . ".</p>\n";
}
?>
 
</body>
</html>
 
