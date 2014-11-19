<?php
include './header.php';

$num1 = $_GET[num1];
$num2 = $_GET[num2];
$mod = ($num1 % $num2);
$div = ($num1 / $num2);

echo "<h1>Division and Modulus</h1>";
echo "<table>
<tr>
<td><table border \"1\">
	<tr><th colspan=\"2\"><h3>Enter your input<h3><th></tr>
	<tr><th>Num1</th><th>Num2</th></tr>
	<form action=\"./index.php\" method=\"get\">	
		<tr><td><input type=\"text\" name=\"num1\"></td><td><input type=\"text\" name=\"num2\"></td></tr>
		<tr><td><input type=\"submit\" value=\"Calculate\"></td></tr>
	</form>
</table></td>
<td><table border=\"1\">
	<tr><th colspan=\"5\"><h3>Mod and Div</h3><th><tr>
	<tr><th>Num1</th><th>Op</th><th>Num2</th></tr>
	<tr><td>$num1</td><td>%</td><td>$num2</td><td>=</td><td>$mod</td></tr>
	<tr><td>$num1</td><td>/</td><td>$num2</td><td>=</td><td>$div</td></tr>
</table></td>
</tr>
</table>";

include './footer.php';
?>
