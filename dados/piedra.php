<!DOCTYPE html>
<html>
<body>

<table border=0 bgcolor=#FFFFFF cellpadding=4 align=center>
<tr>
<td align=center>
<font color=#000000>
<FORM>
<SCRIPT LANGUAGE="JavaScript">
 
var Players_Choice;
var Computers_Choice;
 
var imageArray = new Array(3);
for (var i=0 ; i<3 ; i++)
imageArray[i] = new Image();
imageArray[0]."<src=\piedra\piedra.png' alt='piedra'>";
imageArray[1].src="scissors.gif";
imageArray[2].src="paper.gif";
 
function playGame(Choice) {
 
Players_Choice=Choice;
 
document.user_image.src = imageArray[Players_Choice-1].src;
 
intervalID1 = setInterval('SwitchImage();',100);
setTimeout('results(intervalID1);',700);
}
 
function SwitchImage(){
Computers_Choice=(Math.round(Math.random()*2)+1);
document.comp_image.src = imageArray[Computers_Choice-1].src;
}
 
function results(intervalID1) {
 
clearInterval(intervalID1);
 
if ( 	(Players_Choice ==  1 && Computers_Choice == 2) ||
	(Players_Choice ==  2 && Computers_Choice == 3) ||
	(Players_Choice ==  3 && Computers_Choice == 1)){
win.value++;
alert ('TU GANAS'); }
 
else if ( Players_Choice ==  Computers_Choice ){
tie.value++;
alert ('IGUALES'); }
 
else {
loss.value++;
alert ('TU PIERDES'); }
}
 
function clear_score() {
 
loss.value=0
win.value=0
tie.value=0
}
//  End -->
</script>
</form>
 
<h1>Piedra, Papel o Tijeras.</h1><p>
<font face="Verdana" size="1" color="#000000">Escoge una opción, cliqueando encima del dibujo, y automáticamente se pondrá en marcha la partida.</font>
</p>
<a href="javascript:;" onClick=playGame(1);><img border=0 src="rock.gif" alt="Piedra"></a>
<a href="javascript:;" onClick=playGame(2);><img border=0 src="scissors.gif" alt="Tijeras"></a>
<a href="javascript:;" onClick=playGame(3);><img border=0 src="paper.gif" alt="Papel"></a><br>
Piedra | Tijeras |  Papel
<p><img border=0 NAME="user_image" src="rock.gif" >
  <img border=0 NAME="comp_image" src="paper.gif" ><br>
    Tu        El PC </p>
 
<p>
  <INPUT TYPE="text" SIZE=2 MAXLENGTH=3 NAME="win" WIN.VALUE="0">  Ganadas
  <INPUT TYPE="text" SIZE=2 MAXLENGTH=3 NAME="loss" LOSS.VALUE="0">  Perdidas
  <INPUT TYPE="text" SIZE=2 MAXLENGTH=3 NAME="tie" TIE.VALUE="0">  Empates
</p>
<p> <input type=button value="Poner a Cero" onClick="clear_score()"></p>
</font>
</td>
</tr>
</table>