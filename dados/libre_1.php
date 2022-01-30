<!doctype html>
<html>
<body>

<?php
$alumno=1;
while ($alumno<=5);
{
    $nota1=rand(0, 5);
    $nota2=rand(0, 5);
    $nota3=rand(0, 5);
    $nota4=rand(0, 5);
    echo "estas son las notas obtenidas por el alumno: $alumno<br>";
    echo "la primera nota es: $nota1<br>";
    echo "la segunda nota es: $nota2<br>";
    echo "la tercera nota es: $nota3<br>";
    echo "la cuarta nota es: $nota4<br>";
    if ($promedio=($nota1+$nota2+$nota3+$nota4)/4);
    echo "la nota media obtenida es: $promedio<br><br>";
    if ($promedio>=3.5) {
        echo "aprobado $promedio<br><br><br>";
    } elseif ($pronedio<3.5) {
        echo "suspenso $promedio<br><br><br>";
        $alumno++;
    }
}
?>
 
</body>
</html>