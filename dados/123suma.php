<?php
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);

print "  <p>\n";
print "    <img src=\"img/$dado1.svg\" alt=\"$dado1\" width=\"140\" height=\"140\">\n";
print "    <img src=\"img/$dado2.svg\" alt=\"$dado2\" width=\"140\" height=\"140\">\n";
print "  </p>\n";
print "\n";
print "  <p>Total: <span style=\"border: black 2px solid; padding: 10px; font-size: 300%\">"
     . ($dado1 + $dado2) . "</span></p>\n";
?>