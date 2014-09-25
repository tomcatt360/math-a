<html>
	<head>
		<title>TomcattTemp Converter</title>
	</head>
	<body>
		<center>
			<h1>Temperature Converter</h1><hr>
			<!--If $_GET[temp] == null then:-->
			<?php if($_GET["temp"] == NULL) { ?>
				<!--Begin form to collect temperature and conversion type from user.-->
				<form action="index.php" Method="get">
					Input temperature that you would like to convert: <input type="number" name="temp">
					<select name="unit">
						<option value="f">F -<code>></code> C</option>
						<option value="c">C -<code>></code> F</option>
					</select>
					<br>
					<input type="submit">
				</form>
				<!--End form to collect temperature and conversion type from user.-->
				<!--Else:-->
			<?php
				}
				else{
					if($_GET["unit"] == "f"){
			?>
					<!--Begin processing and display output F -> C-->
					<p>
					<?php
						$f_2_c=($_GET["temp"]-32)*5/9;
					?>
					Input (F): <?=$_GET["temp"]?> Celsius: <?=$f_2_c?>
				</p>
				<!--End processing F -> C-->
				<?php }else{ ?>
				<!--Begin processing C -> F-->
				<p>
					<?php
						$c_2_f=$_GET["temp"]*9/5+32;
					?>
					Input (C): <?=$_GET["temp"]?> Fahrenheit:<?=$c_2_f?>
				</p>
				<!--End processing C -> F-->
				<?php } ?>
				<p><a href="http://208.94.240.5/20140908">Convert Again</a></p>
			<?php } ?>
			<p><a href="http://208.94.240.5">Home</a></p>
		</center>
		<p><a href="index.txt">View Source</a></p>
	</body>
</html>
