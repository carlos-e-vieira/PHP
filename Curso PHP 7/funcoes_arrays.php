<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Funções Arrays</title>
	</head>

	<body>
		<?php
			/*
			//is_array -> verifica se o paramentro é um array retornando true ou false
			$array = ["String", "Int"];
			$retorno = is_array($array);

			if($retorno) {
				echo "Sim, é um array";
			
			} else {
				echo "Não, não é um array";
			}
			*/

			/*
			//array_keys -> retorna todas as chaves de um array
			$array = [1 => "a", 7 => "b", 18 => "c"];
			echo "<pre>";
				print_r($array);
			echo "</pre>";

			$chaves_array = array_keys($array);
			echo "<pre>";
				print_r($chaves_array);
			echo "</pre>";
			*/

			/*
			//sort -> ordena um array e reajusta seus indices em ordem alfabetica
			$array = ["Mouse", "Teclado", "Gabinete", "Monitor", "Processador", "Fonte"];
			echo "<pre>";
				print_r($array);
			echo "</pre>";

			sort($array); // retorna true ou false
			echo "<pre>";
				print_r($array);
			echo "</pre>";
			*/

			/*
			//asort -> ordena um array e preserva seus indices em ordem alfabetica
			$array = ["Mouse", "Teclado", "Gabinete", "Monitor", "Processador", "Fonte"];
			echo "<pre>";
				print_r($array);
			echo "</pre>";

			asort($array); // retorna true ou false
			echo "<pre>";
				print_r($array);
			echo "</pre>";
			*/

			/*
			//count -> conta a quantidade de elementos dentro de um array
			$array = ["Mouse", "Teclado", "Gabinete", "Monitor", "Processador", "Fonte"];
			echo "<pre>";
				print_r($array);
				echo count($array);
			echo "</pre>";
			*/

			/*
			//array_merge -> funde um ou mais arrays
			$array1 = ["Linux", "Windows"];
			$array2 = ["OSX"];
			$array3 = ["Solaris"];

			$novo_array = array_merge($array1, $array2, $array3);
			echo "<pre>";
				print_r($novo_array);
			echo "</pre>";
			*/

			/*
			//explode -> divide uma String baseado em um delimitador
			$string_data = "11/09/1982";
			$novo_array = explode("/", $string_data);

			echo "<pre>";
				echo $string_data . "<br>";
				print_r($novo_array);
				echo $novo_array[2]. "-" .$novo_array[1]. "-" .$novo_array[0];
			echo "</pre>";
			*/


			// implode - juntas os elemntos de um array em uma String
			$array = ["a", "b", "c", "d"]; // a, b, c, d
			$string = implode(".|.", $array);

			echo $string;
		?>
	</body>
</html>