<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Variaveis</title>
	</head>
	<body>
		<?php

			//String
			$nome = "Carlos Eduardo Viera";

			//int
			$idade = 38;

			//float
			$peso = 76.5;

			// boolean
			// true retorna 1 e false retorna nada
			$fumante_sn = true;

		?>

		<h1>Fucha cadastral</h1>
		<br>
		<p> Nome: <?= $nome ?> </p>
		<br>
		<p> Idade: <?= $idade ?> </p>
		<br>
		<p> Peso: <?= $peso ?> </p>
		<br>
		<p> Fumante: <?= $fumante_sn ?> </p>

	</body>
</html>