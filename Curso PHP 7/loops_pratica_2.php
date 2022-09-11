<!DOCTYPE html>
<html>
	
	<head>

		<meta charset="utf-8">
		<title>Lopps Praticando 2</title>

	</head>

	<body>
		
		<?php

			/*
			$funcionarios = ["João", "Maria", "Julia"];

			echo "<pre>";
				print_r($funcionarios);
			echo "</pre>";

			//recupera indice e nome do usuario do array
			foreach($funcionarios as $idx => $nome_funcionario) {
				echo "ID: $idx Nome: $nome_funcionario <br>";
			}
			*/

			$funcionarios = [
								["nome" => "João", "salario" => 2500, "data" => "11/09/1982"],
								["nome" => "Maria", "salario" => 6500],
								["nome" => "Júlia", "salario" => 1000]
							];

			echo "<pre>";
				print_r($funcionarios);
			echo "</pre>";

			//recupera indice e nome do usuario do array
			foreach($funcionarios as $idx => $funcionario) {
				
				foreach($funcionario as $idx2 => $valor) {
					echo "$idx2 - $valor <br>";
				}

				echo "<hr>";

			}

		?>

	</body>

</html>