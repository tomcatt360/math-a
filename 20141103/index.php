<?php
include './header.php';
/*
Numeric Sequencer
Written by Thomas Parker<tomcatt360@gmail.com
Creates a sequence of numbers based on the user's input
*/
echo "<h1>Numeric Sequencer</h1>";

if ($_GET[start] != null && $_GET[stop] != null){

	$start=$_GET[start];
	$stop=$_GET[stop];

	while ($start <= $stop){
		echo "$start<br>";
		$start = $start + 1;
	}
}else{
	//user has not entered anything, show html form
	echo "<form action=\"./index.php\" method=\"get\">
	Starting Number: <input type=\"text\" name=\"start\"><br>
	Ending Number: <input type \"text\" name=\"stop\"><br>
	<input type=\"submit\" value=\"Create Sequence!\">
	</form>";
}
include './footer.php';
?>
