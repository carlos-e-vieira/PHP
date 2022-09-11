<html>

	<head>
		
		<title> Aplicação Doação de Sangue </title>
		<meta charset="utf-8">

	</head>

	<body>
		
		<?php

			$idade = 15;
			$peso = 50;

			if( ($idade <= 69 && $idade >= 16) && $peso >= 50 ) {
				echo "Atende os requisitos";
			} else {
				echo "Não atende os requisitos";
			}

		?>

	</body>

</html>