<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Functions</title>
</head>
<body>
	<?php
		// a function is like a method in java
		function display(){
			// this function will call the other functions and display it...
				say_Something();
				echo "<br>";
				add();
		}

		function add(){
			// This function will add two numbers
			$num1 = 18;
			$num2 = 61;
			
			echo "The Sum of 18 and 61 is: " . ($num1 + $num2);
		}


		function say_Something(){
			// this function will output the echo here.
			echo "Hello Studentm do you like the class?, okay great";
		}


		display();








	 ?>
	
</body>
</html>