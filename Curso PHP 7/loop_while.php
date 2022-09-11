<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Loop While</title>
</head>
<body>
	<?php
		// comparação / operadores lógicos
		$num = 1;

		echo "-- Inicio do Loop <br>";

		while($num < 10){

			$num++; //critério de parada

			if ($num == 2 || $num == 6) {
				continue;
			}

			echo "$num <br>";

			/*
			if($num > 100) {
				break;
			}
			*/


		}

		echo "-- Fim do Loop";
	?>
</body>
</html>