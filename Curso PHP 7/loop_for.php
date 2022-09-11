<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Loop For</title>
</head>
<body>

	<?php

		/*
		$num = 1

		while($num <= 10) {
	
		}


		do {
	
		} while($num <= 10);
		*/

		for($num = 10; true; $num--) {

			if($num == 0) {
				break;
			}

			echo "num = $num <br>";
		}

	?>

</body>
</html>