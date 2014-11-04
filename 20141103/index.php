<?php
include './header.php';
/*
Numeric Sequencer
Written by Thomas Parker <tomcatt360@gmail.com>
Creates a sequence of numbers based on the user's input
*/
echo "<h1>Numeric Sequencer</h1>";

if ($_GET[start] != null && $_GET[stop] != null){
	if (is_numeric($_GET[start]) && is_numeric($_GET[stop])){
		$start=$_GET[start];
		$stop=$_GET[stop];

		while ($start <= $stop){
			echo "$start<br>";
			$start = $start + 1;
		}
	}
}else{
	//user has not entered anything, show html form
	echo "<form action=\"./index.php\" method=\"get\">
	<table>
	<tr><td>Starting Number: </td><td><input type=\"text\" name=\"start\"></td></tr>
	<tr><td>Ending Number: </td><td><input type \"text\" name=\"stop\"></td></tr>
	<tr><td><input type=\"submit\" value=\"Create Sequence!\"></td><td></td><tr>
	</table>
	</form>";
}
include './footer.php';
?>
