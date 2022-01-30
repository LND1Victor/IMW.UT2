<!DOCTYPE html>
<html>
<body>
<?php
$tope=5;
for ($i=1;$i<=1000;$i++)
 {
	 for($j=1;$j<=$tope*2;$j++)
	 {
		 if($i%2==0&&$i<=1000)
		 {
			 echo $i.",";
		 }
		 $i++;
	 }
	
	$tope+=5;
	 echo "</br>";
 }

?>    

</body>
</html>