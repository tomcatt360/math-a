<?php
include './header.php';

echo "<h1>tomcatt's 3-Number Comparator</h1>";

$number1=$_GET[number1];
$number2=$_GET[number2];
$number3=$_GET[number3];
if ($number1 != null && $number2 != null && $number3 != null) {
	if (is_numeric($number1) && is_numeric($number2) && is_numeric($number3)){
		// If the numbers are not null, and the numbers are truly numbers, Process input.
		// FIXME Add more comparisons
		
		if ($number1 == $number2){
			if ($number1 == $number3){
				echo "All Three Numbers are equal";
			}elseif ($number1 > $number3){
				echo "Number 1 and Number 2 are equal, Number 3 is less than each of them.";
			}else{
				echo "Number 1 and Number 2 are equal, Number 3 is greater than each of them.";
			}
		}elseif($number1 > $number2){
			if ($number2 > $number3){
				echo "Number 1 is greater than Number 2. Number 2 is greater than Number 3.";
			}elseif ($number1 > $number3){
				echo "Number 1 is greater than Number 3. Number 3 is greater than number 2.";
			}else{
				echo "Number 3 is greater than number 1. Number 1 is greater than number 2.";
			}
		}elseif ($number2 > $number1){
			if ($number1 > $number3){
                                echo "Number 2 is greater than Number 1. Number 1 is greater than Number 3.";
                        }elseif ($number2 > $number3){
                                echo "Number 2 is greater than Number 3. Number 3 is greater than number 1.";
                        }else{
                                echo "Number 3 is greater than number 2. Number 2 is greater than number 1.";
			}
		}
		echo "<a href=\"./index.php\">Compare more numbers</a>";
	}else{
		// User input wrong
		echo "<h1>User Input Wrong</h1><br>
		<a href=\"./index.php\">Back</a>";
	}
}else{
	// User has not entered anything, Show form
	echo "<form action=\"./index.php\" method=\"get\">
	Number 1: <input type=\"text\" name=\"number1\"><br>
	Number 2: <input type=\"text\" name=\"number2\"><br>
	Number 3: <input type=\"text\" name=\"number3\"><br>
	<input type=\"submit\" value=\"Submit\">
	</form>";
}
include './footer.php';
?>
