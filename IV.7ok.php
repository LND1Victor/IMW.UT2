<!DOCTYPE html>
<html>
<style>
        body{
            background-color: yellowgreen;
            text-align: ju;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: xx-large;
        }
        table{
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            
            margin: 2;
            border: 1px solid black;
             border-collapse: collapse;
        }


        </style>
<body>

<?php 
echo "<center>";
echo "<img src='nba.png' alt='equipos nba'>";
echo "</center>";

echo "<center>";
echo "<table>";
echo "<tr>";
    
    echo"<br><br><br><br>";
    


$equipo = array('San Antonio Spurs'=>'Dejounte Murray', 'Cleveland Cavaliers'=>'Darius Garland', ' Miami Heat'=>'Jimmy Butler', 'Chicago Bulls'=>'DeMar DeRozan', ' Phoenix Suns'=>'Devin Booker','Dallas Mavericks'=>'Luka Dončić', 'Milwaukee Bucks'=>'Giannis Antetokounmpo', 'Philadelphia 76ers'=>'Ben Simmons', 'Golden State Warriors'=>'Stephen Curry', 'Memphis Grizzlies'=>'Ja Morant',);


echo '<br/>';
echo "<tr>EQUIPO | JUGADOR FRANQUICIA</tr><br/><br/>";

foreach($equipo as $team=>$jugadorfranquicia)

{
   
    print "<td><b> $team </b></td> ";
    print "<td><b> $jugadorfranquicia </b></td>";
    echo  "</tr>";
   

}
echo "</tr>";
echo "</table>";
echo "</center>";


  ?>
</body>
</html>

  