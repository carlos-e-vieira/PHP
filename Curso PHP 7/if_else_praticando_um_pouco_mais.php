<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>If Else - Praticando um pouco mais</title>
</head>
<body>

	<?php

		//
		$usuario_possui_cartao_loja = true;
		$valor_compra = 220;

		$valor_frete = 50;
		$recebeu_desconto_frete = false;

		if ($usuario_possui_cartao_loja && $valor_compra >= 100) {
			$valor_frete = 0;
		};

	?>

	<h1>
		Destalhes do pedido
	</h1>

	<p>
		Possui cartão da loja? 

		<?php

			if ($usuario_possui_cartao_loja) {
				echo "SIM";
			} else {
				echo "NÃO";
			}

		?>

	</p>

	<p>
		Valor da compra: <?= $valor_compra ?>
	</p>

	<p>
		Recebeu desconto no frete? 

		<?php 

			if ($valor_compra >= $valor_frete) {
				echo "SIM";
			} else {
				echo "NÃO";
			}

		?>
	</p>

</body>
</html>