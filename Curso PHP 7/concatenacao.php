<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Concatenação</title>
	</head>
	<body>
		
		<?php

			$nome = "Carlos Vieira";
			$cor = "verde";
			$robi = "programar";

			// operador . para concatenar
			echo "Olá " . $nome . ", vi que sua cor preferida é " . $cor . ", e vi tambem que voce gosta de " . $robi ."";

			echo "<br><hr>";

			// aspas duplas
			echo "Olá $nome, vi que sua cor preferida é $cor, e vi tambem que voce gosta de $robi.";
		?>

	</body>
</html>