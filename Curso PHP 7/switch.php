<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Switch</title>
</head>
<body>

	<?php

		$paramentro = "dd";

		switch ($paramentro) {

			case 1:
				echo "Entrou no case 1";
				break;

			case 2:
				echo "Entrou no case 2";
				break;

			case 3:
				echo "Entrou no case 3";
				break;

			case "Carlos":
				echo "Entrou no case 4";
				break;

			default: 
				echo "Entrou no default";
				break;

		};

	?>

</body>
</html>