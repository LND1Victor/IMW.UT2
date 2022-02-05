<!DOCTYPE html>
<html>
<style>
        body{
            background-color: yellowgreen;
            text-align: center;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: xx-large;
        }
        table{
            text-align: center;
            background-color: white;
            border: 4;
            margin: 2;
            align-items: center;
            align-content: center;
        }
        </style>
<body>

    <?php
echo"<br><br><br><br>";
echo "Listado de Participantes !!<br><br><br><br>";
    echo "<center>";
    echo "<table>";
    echo "<tr>";


$participantes = array('0' => "Victor", '1' => "Gabriel", '2' => "Juan Félix", '3' => "Evelyn", '4' => "Javier", '5' => "Brian", '6' => "Iván" );

foreach($participantes as $x => $x_value)
 {
    
    print "<td> $x </td> ";
    print "<td> $x_value </td>";
    echo  "</tr>";
   
  }
  echo "</tr>";
  echo "</table>";
  echo "</center>";





?>
</body>
</html>

  