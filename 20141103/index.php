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
		if ($_GET[start] < $_GET[stop]){
			echo "<a href=\"./index.php\">Make another sequence</a><br>";
			$start=$_GET[start];
			$stop=$_GET[stop];
			echo "<table>";
			while ($start <= $stop){
				echo "<tr>";
				//TODO change to a for loop
				$t=0;
				while ($t<10){
					$t=$t+1;
					echo "<td>$start</td>";
					$start = $start + 1;
				}
				echo "</tr>";
			}
			echo "</table>";
		}else{
			echo "<h1>Start value greater than Stop value</h1>
			<a href=\"./index.php\">Try Again</a>";
		}
	}else{
		echo "<h1>User input wrong</h1>
		<a href=\"./index.php\">Try again</a>";
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
