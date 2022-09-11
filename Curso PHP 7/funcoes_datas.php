<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Funções Datas</title>
</head>
<body>

	<?php

		/*
		// recuperação da data atual / data corrente
		echo date("d/m/Y H:i");

		echo "<br>";
		echo date_default_timezone_get();
		date_default_timezone_set("America/Sao_Paulo");
		echo "<br>";

		echo date("d/m/Y H:i");
		*/


		//tranformara datas textuais em segundos
		$data_inicial = "2021-06-11";
		$data_final = "2021-09-11";

		//timestamp
		//01/01/1970 -> data era Unix até 2021-06-11

		$time_inicial = strtotime($data_inicial);
		$time_final = strtotime($data_final);

		echo $data_inicial . " - " . $time_inicial;
		echo "<br>";
		echo $data_final . " - " . $time_final;

		$diferenca_times = $time_final - $time_inicial;
		echo "<br>" . $diferenca_times;

		$segundos_existem_dia = 24 * 60 * 60;
		echo "<br>";
		echo "Um dia possui " . $segundos_existem_dia . " segundos.";

		$dias = $diferenca_times / $segundos_existem_dia;
		echo "<br>";
		echo "A diferença em dia é " . $dias;

	?>

</body>
</html>