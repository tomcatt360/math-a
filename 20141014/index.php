<?php
include './header.php'

echo "<h1>tomcatt's Number Comparator<h1>2.0"

$number1=$_GET[number1]
$number2=$_GET[number2]
$number3=$_GET[number3]
if ($number1 != null && $number2 != null && $number3 != null) {
	if (is_numeric($number1) && is_numeric($number2) && is_numeric($number3)){
		// If the numbers are not null, and the numbers are truly numbers, Process input.
		// FIXME Add more comparisons
		if ($number1 > $number2){
			echo "Number 1 is greater than Number 2"
		}elseif ($number1 < $number2){
			echo "Number 2 is greater than Number 1"
		}else{
			echo "Numbers 1 & 2 are equal"
		}
		echo "<a href=\"./index.php\">Compare more numbers</a>"
	}else{
		// User input wrong
		echo "<h1>User Input Wrong</h1>"
		echo "<br><a href=\"./index.php\">Back</a>"
	}
}else{
	// User has not entered anything, Show form
	echo "<form action=\"./index.php\" method=\"get\">
	Number 1: <input type=\"text\" name=\"number1\"><br>
	Number 2: <input type=\"text\" name=\"number2\"><br>
	Number 3: <input type=\"text\" name=\"number3\"><br>
	<input type=\"submit\" value=\"Submit\">
	</form><hr>";
}
include './footer.php'
?>