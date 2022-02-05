<!DOCTYPE html>
<html>
<style>
        body{
            background-color: yellowgreen;
            text-align: center;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: x-large;
        }
        </style>
<body>

<?php
function multiplicar($num){
    for ($i=1;$i<=10;$i++){
echo"<br>$i x $num =".$i*$num;
    }
    
}

$num = rand(1,10);
echo "La tabla de multiplicar de $num";
multiplicar($num);

?>
</body>
</html>
