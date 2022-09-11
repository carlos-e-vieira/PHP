<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Arrays Pesquisa</title>
</head>
<body>

	<?php

		//in_array -> retorna true ou false para a existencia do que está sendo procurado
		//array_search -> retorna o indice do valor pesquisado caso ele exista

		/*
		$lista_frutas = ["Banana", "Maçã", "Morango", "Uva"];

		echo "<pre>";
		print_r($lista_frutas);
		echo "</pre>";

		//in_array
		//$existe = in_array("Maçã", $lista_frutas);
		
		//array_search
		$existe = array_search("Uva", $lista_frutas);
		echo $existe . "<br>";


		if($existe != null) {
			echo "O elemento existe";
		
		} else {
			echo "O elemento não existe";
		}
		*/

		$lista_frutas = ["Banana", "Maçã", "Morango", "Uva"];

		$lista_coisas = ["frutas" => $lista_frutas, "pessoas" => ["João", "Maria", "Jose"]];


		echo "<pre>";
		print_r($lista_coisas);
		echo "</pre>";

		echo in_array("Maçã", $lista_coisas["frutas"]);

	?>

</body>
</html>