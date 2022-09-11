<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Funções String PHP</title>
</head>
<body>

	<?php

		$texto = "Curso Completo de PHP";

		// string to lower -> deixa tudo em minusculo
		echo $texto . "<br>";
		echo strtolower($texto);
		echo "<br><hr><br>";


		// string to upper -> deixa tudo em maiusculo
		echo $texto . "<br>";
		echo strtoupper($texto);
		echo "<br><hr><br>";


		$texto2 = "curso Completo de PHP";

		// upper case first -> transforma a primeira string em maiuscula
		echo $texto2 . "<br>";
		echo ucfirst($texto2);
		echo "<br><hr><br>";


		// string length -> conta a quantidade de caracteres na string
		echo $texto . "<br>";
		echo strlen($texto);
		echo "<br><hr><br>";


		// string replace -> Substitui uma cadeia de caracteres dentro de uma string
		echo $texto . "<br>";
		echo str_replace( "PHP", "JavaScript", $texto );
		echo "<br><hr><br>";


		// substitu string -> Retorna parte da string
		echo $texto . "<br>";
		echo substr($texto, 0, 11);
		echo "<br><hr><br>";

	?>

</body>
</html>