<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Testando Função</title>
</head>
<body>

	<?php

		function exibirNomeCompleto ($nome, $sobrenome, $idade) {

			$nome = "Carlos ";
			$sobrenome = "Vieira ";
			$idade = 38;

			$nome_completo = $nome . $sobrenome . $idade;
			return $nome_completo;
		}

		$exibir_nome = exibirNomeCompleto(1, 2, 3);

		echo $exibir_nome;

	?>

</body>
</html>