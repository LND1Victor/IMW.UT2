
<!DOCTYPE html>
<html>
<body>
<?php
$edad=mt_rand(1,100);
if(($edad>=16)&&($edad<=65))
{	echo "$edad años<br>El usuario está en edad laboral";
}
else
{    echo "$edad años<br>El usuario no está en edad laboral";
}
?>
</body>
</html>
