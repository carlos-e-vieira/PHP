<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Casting Tipos</title>
</head>
<body>

	<?php

		//gettype() -> retorna o tipo da variavel
		$valor = "10.55";
		//$valor2 = (float) $valor; // float, double, real
		//$valor2 = (string) $valor;
		$valor2 = (int) $valor; // int, integer

		echo $valor. " " .gettype($valor);
		echo "<br>";
		echo $valor2. " " .gettype($valor2);

	?>

</body>
</html>