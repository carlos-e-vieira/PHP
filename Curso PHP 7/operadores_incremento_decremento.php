<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Operadores Incremento e Decremento</title>
</head>
<body>

	<h3>Pós Incremento</h3>
	<?php

		$a = 5;

		echo "O valor da variável A é $a <br>";
		echo "O valor da variável A após o incremento é " . $a++ . " <br>";
		echo "O valor atualizado de A é $a";

	?>

	<h3>Pré Incremento</h3>
	<?php

		$a = 5;

		echo "O valor da variável A é $a <br>";
		echo "O valor da variável A com o pré incremento é " . ++$a . " <br>";
		echo "O valor atualizado de A é $a";

	?>

	<br><br><br><hr><br>

	<h3>Pós Decremento</h3>
	<?php

		$a = 5;

		echo "O valor da variável A é $a <br>";
		echo "O valor da variável A após o decremento é " . $a-- . " <br>";
		echo "O valor atualizado de A é $a";

	?>

	<h3>Pré Decremento</h3>
	<?php

		$a = 5;

		echo "O valor da variável A é $a <br>";
		echo "O valor da variável A com o pré decremento é " . --$a . " <br>";
		echo "O valor atualizado de A é $a";

	?>

</body>
</html>