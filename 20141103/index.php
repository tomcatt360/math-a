<?php
include './header.php';
/*
Numeric Sequencer
Written by Thomas Parker<tomcatt360@gmail.com
Creates a sequence of numbers based on the user's input
*/
echo "<h1>Numeric Sequencer</h1>";
$start=1;
$stop=100;
while ($start <= $stop){
echo "$start<br>";
$start = $start + 1;
}
include './footer.php';
?>
