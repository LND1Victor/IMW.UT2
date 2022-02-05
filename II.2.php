<!DOCTYPE html>
<html>
<body>

<?php


$num= rand(1,10);
$res= 0;

echo "TABLA DEL $num";
echo "<br>";
while ($res < $num*10) {
  $res+= $num;
    echo "El resultado es: $res <br>";
    
}

?>

</body>
</html>
