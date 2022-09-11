<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>If Else Operadores Lógicos</title>
</head>
<body>

	<?php

		// Operadores condicionais / comparação
		// == Igual
		// === Identico
		// != ou <> Diferente
		// !== Não identico
		// < Menor que
		// > Maior que
		// <= Menor ou igual
		// >= Maior ou igual


		// Operadores Lógicos
		// E: && ou AND -> retorna verdadeiro se todos os resutados forem true
		// OU: || ou OR -> retorna verdadeiro se apenas um resutado for verdadeiro
		// XOR: XOR -> retorna verdadeiro se uma das expressões for falsa e a outra verdadeira
		// ! -> inverte o resultado retornado pela expressão

		/*
		if(!("a" == "b")) {

			echo "Verdadeiro";

		} else {

			echo "Falso";

		};
		*/

		// () php analixa primeiro o que está nos parenteses

		if( (22 == 22 && 13 >= 10) XOR 5 === 5 ) {
			echo "Verdadeiro";
		} else {
			echo "Falso";
		};

	?>

</body>
</html>