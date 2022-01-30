<!DOCTYPE html>
<html>
<head>
<title>Bucle Hacer Mientras-(Do While)</title>
</head>
<body>
<?php
$a=0;
do
{
echo "<table border=4 width=400 align=center>";
while ($a<=255)
{
echo "<tr><td bgcolor=rbg($a,$a,$a)>";
echo $a;
$a=$a+5;
echo "</td></tr>";
}
echo"</table>";
}
while ($a<=170);
?>
<body>
</html>