<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Return values</title>
</head>
<body>
	

	<?php 
		function addNumbers($num1, $num2){
			$sum = $num1 + $num2;
 			
 			return $sum;



		}

		$result = addNumbers(32,12);
			echo "$result"."<br>";


		$result = addNumbers(100, $result);
		echo "$result";






	?>
	
</body>
</html>