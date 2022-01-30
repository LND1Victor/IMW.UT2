<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php


$fechaInicio = "2022-01-01 00:00:00";
$fechaFin = "2022-01-01 24:00:00";


$tiempoInicio = strtotime($fechaInicio);
$tiempoFin = strtotime($fechaFin);

$hora = 3600;
while($tiempoInicio <= $tiempoFin){

	$fechaActual = date("Y-m-d H:i:s", $tiempoInicio);
    
	printf("Fecha y hora dentro del ciclo: %s\n", $fechaActual);
echo "<br>";
	# Sumar el incremento para que en algún momento termine el ciclo
	$tiempoInicio += $hora;
}

?>
</body>
</html>
