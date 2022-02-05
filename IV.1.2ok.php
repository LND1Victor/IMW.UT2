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
function tablas($inicio,$fin){
    for ($i=$inicio;$i<=$fin;$i++){
echo "La tabla de multiplicar de $i"; multiplicar ($i);
    }
    
}

function multiplicar($num){
    for ($i=1;$i<=10;$i++){
echo"<br>$i x $num =".$i*$num;
    }
    
}
do{
$inicio=rand(1,10);
$fin=rand(1,10);
    
}
while($inicio>$fin);
tablas($inicio,$fin);

?>
</body>
</html>
