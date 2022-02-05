<!DOCTYPE html>
<html>
<body>

<?php
$temperatura = array();
$media=0;

for ($x = 0; $x < 10; $x++) {
    echo $temperatura[$x]=rand(-5,50);
    $media=$media + $temperatura[$x];//sumo todas las temperaturas

    echo "La Temperatura $x es $temperatura[$x]<br>";
}

$media=$media/10;

echo "La media es $media"

?>

</body>
</html> 