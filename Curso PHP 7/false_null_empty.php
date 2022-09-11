<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> False, Null, Empty </title>
	</head>

	<body>
		<?php
			//false -> tipo de valor boolean
			//false e empty -> valores especiais

			$funcionario1 = null;
			$funcionario2 = "";
			$funcionario3 = false;

			//valores null
			if(is_null($funcionario1)) {
				echo "Sim, a variável é Null";
			
			} else {
				echo "Não, a variável não é Null";
			}

			echo "<br>";

			if(is_null($funcionario2)) {
				echo "Sim, a variável é Null";
			
			} else {
				echo "Não, a variável não é Null";
			}

			echo "<br>";

			if(is_null($funcionario3)) {
				echo "Sim, a variável é Null";
			
			} else {
				echo "Não, a variável não é Null";
			}

			echo "<br><hr>";

			//valores empty
			if(empty($funcionario1)) {
				echo "Sim, a variável é Empty";
			
			} else {
				echo "Não, a variável não é Empty";
			}

			echo "<br>";

			if(empty($funcionario2)) {
				echo "Sim, a variável é Empty";
			
			} else {
				echo "Não, a variável não é Empty";
			}

			echo "<br>";

			if(empty($funcionario3)) {
				echo "Sim, a variável é Empty";
			
			} else {
				echo "Não, a variável não é Empty";
			}
		?>
	</body>
</html>