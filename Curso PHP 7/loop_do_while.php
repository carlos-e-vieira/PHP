<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Loop Do While</title>
	</head>

	<body>

		<?php

			$x = 1;

			// do while executa antes da condição
			do {
				echo "x = $x <br>";

				$x++; // criterio de parada com incremento
				//continue
				//break
			} while ($x < 9);


			/*
			echo "<br>";

			while($x < 9) {
				echo "Entrou no laço while";
			}
			*/

		?>

	</body>
</html>