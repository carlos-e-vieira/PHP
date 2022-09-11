<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Array Basico</title>
</head>
<body>

	<?php
		/*
		// sequenciais (númericos);
		//$lista_frutas = array("Banana", "Maçã", "Morango", "Uva");
		$lista_frutas = ["Banana", "Maçã", "Morango", "Uva"];
		// incluindo novo item no array
		$lista_frutas[] = "Abacaxi";

		// funções para debug
		echo "<pre>";
		var_dump($lista_frutas);
		echo "</pre>";
		echo "<hr>";
		echo "<pre>";
		print_r($lista_frutas);
		echo "</pre>";

		echo "<br>" . $lista_frutas[2];
		*/
		

		// associativos
		$lista_frutas = ["a"=> "Banana",
						 "b"=> "Maçã",
						 "x"=> "Morango",
						 "y"=> "Uva"];

		$lista_frutas["f"] = "Abacaxi";
		
		echo "<pre>";
		var_dump($lista_frutas);
		echo "</pre>";

		
		echo $lista_frutas["f"];

	?>

</body>
</html>