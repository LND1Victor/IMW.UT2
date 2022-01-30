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
 }//Fin del 1er FOR

	// // if($i==$tope)
	// // {
		// // echo "</br>";
	// // }
	
// $tope=5;

//2ª Versión, Daniel Martín

$t=0;
$s=1;
for ($i=0;$i<=1000;$i++)
{
		if($i%2==0){
			echo " $i,";
			$t++;
		}
		
		if($t%(5*$s)==0){
			echo "<br>";
			$t=0;
			$s++;
			$i++;//Añadido
		}
}//Fin del 1er FOR

?>    

</body>
</html>