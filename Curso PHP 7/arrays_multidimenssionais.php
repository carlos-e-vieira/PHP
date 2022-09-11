<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Arrays Multidimensionais</title>
</head>
<body>

	<?php

		$lista_coisas = [];

		$lista_coisas["frutas"] = [1 => "Banana", 2 => "Maçã", 3 =>  "Uva",  4 => "Morango"];
		$lista_coisas["pessoas"] = [1 => "João", 2 =>  "Carlos", 3 =>  "José", 4 =>  "Maria"];

		echo "<br>";

		echo "<pre>";
		print_r($lista_coisas);
		echo "</pre>";

		echo "<hr>";
		echo $lista_coisas["frutas"][2];
		echo "<br>";
		echo $lista_coisas["pessoas"][2];

	?>

</body>
</html>