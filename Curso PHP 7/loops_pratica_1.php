<!DOCTYPE html>
<htnl>
	<head>

		<meta charset="utf-8">
		<title> Praticando Loops em Arrays</title>

	<head>

	<body>

		<?php

			$registros = [
				["titulo" => "Titúlo noticia 1", "conteudo" => "Conteudo noticia 1"],
				["titulo" => "Titúlo noticia 2", "conteudo" => "Conteudo noticia 2"],
				["titulo" => "Titúlo noticia 3", "conteudo" => "Conteudo noticia 3"],
				["titulo" => "Titúlo noticia 4", "conteudo" => "Conteudo noticia 4"],
				["titulo" => "Titúlo noticia 5", "conteudo" => "Conteudo noticia 5"]];

			echo "<pre>";
				print_r($registros);
			echo "</pre>";

			$idx = 0;

			//count -> conta a quantidade de elementos de um array
			echo "O array possui " . count($registros) . " registros";
			echo "<br>";

			/*
			// while
			while($idx < count($registros)) {

				echo "<h3>" . $registros[$idx]["titulo"] . "</h3>";
				echo "<p>" . $registros[$idx]["conteudo"] . "</p>";
				echo "<hr>";

				$idx++;

			}
			*/

			/*
			// do while
			do {

				echo "<h3>" . $registros[$idx]["titulo"] . "</h3>";
				echo "<p>" . $registros[$idx]["conteudo"] . "</p>";
				echo "<hr>";

				$idx++;

			} while($idx < count($registros));
			*/

			//for
			for ($i=0; $i < count($registros); $i++) { 
				echo "<h3>" . $registros[$i]["titulo"] . "</h3>";
				echo "<p>" . $registros[$i]["conteudo"] . "</p>";
				echo "<hr>";
			}

		?>

	</body>

</html>