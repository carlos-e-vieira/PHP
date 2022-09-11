<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aplicação Calcula Imposto de Renda</title>
</head>
<body>

	<?php

		function calcularImpostoRenda($salario) {
			if($salario <= 1903.98) {
				echo "Isento";
			
			} else if($salario >= 1903.99 && $salario <= 2826.65) {
				echo "7,5%";
			
			} else if($salario >= 2826.66 && $salario <= 3751.05) {
				echo "15%";
			
			} else if($salario >= 3751.06 && $salario <= 4664.68) {
				echo "22,5%";
			
			} else {
				echo "27,5%";
			}

		}

		echo calcularImpostoRenda(750.00);

	?>

</body>
</html>