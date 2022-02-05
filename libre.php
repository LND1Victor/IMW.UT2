
<!DOCTYPE html>
<html>
    <style>
        body{
            background-color: #d8dadb;
            text-align: center;
            font-family: 'Courier New', Courier, monospace;
            font-size: x-large;
            color:#434750;
        }
        img{
            width:160px;
            height:65px;

        }
        </style>
<body>

<?php
 

$employees = array(
"Victor" => array("Ocupación" => "Estudiante 2º","Email" =>"asir@gmail.com",
"teléfono" => "123456789"),
"Juan Félix" => array("Ocupación" => "Estudiante 2º","Email" =>"asir@gmail.com",
"teléfono" => "123456789"),
"Gabriel" => array("Ocupación" => "Estudiante 2º","Email" =>"asir@yahoo.com",
"teléfono" => "123456789"),
);
 
/*Reading multidimensional array using for loop */
foreach( $employees as $key=>$value ) {
    echo "<br/>";
    echo  "Nombre:<b> $key </b><br/>";
    foreach( $value as $k=>$v ) {
        echo "$k: <b> $v </b><br/>";
    }
}
 
echo "<br/>";
 
/* Reading multi-dimensional array multiple indexes */
echo "La dirección de correo electrónico de <b> Victor </b> es : " ;
echo $employees['Victor']['Email'] . "<br />";
 
echo "El número de teléfono de <b> Juan Félix </b> es : ";
echo $employees['Juan Félix']['teléfono'] . "<br />";
 
echo "El Ocupación de <b> Gabriel </b> es : " ;
echo $employees['Gabriel']['Ocupación'] . "<br />";
echo "<br><br>";
echo "<hr>";
echo "<br>";
echo "<img src='logo1.png' alt='logo 1'>  <img src='logo2.png' alt='logo 2'>  <img src='logo3.png' alt='logo 3'> ";

?>
</body>
</html>
