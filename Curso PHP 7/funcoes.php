<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Funções / Function</title>
</head>
<body>

	<?php

		//void -> não retorna nada
		function exibirBoasVindas() {
			echo "Bem-vindo ao curso de PHP </br>";
		}

		exibirBoasVindas();

		//return -> com retorno
		function calcularAreaTerreno($largura, $comprimento) {
			$area = $largura * $comprimento;
			return $area;
		}

		echo calcularAreaTerreno(25, 5);

	?>

</body>
</html>