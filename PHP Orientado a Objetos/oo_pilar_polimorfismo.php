<?php


	class Carro extends Veiculo {
		public $teto_solar = true;

		function __construct($placa, $cor) {
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function abrirTetoSolar() {
			echo 'Abrir teto solar';
		}

		function alterarPosicaoVolante() {
			echo 'Alterar posição volante';
		}
	}

	class Moto extends Veiculo {
		public $contraPesoGuidao = true;

		function __construct($placa, $cor) {
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function empinar() {
			echo 'Empinar';
		}

		function trocarMarcha() {
			echo 'Desengatar a embreagem com a mão e trocar a marcha com o pé';
		}

	}

	class Caminha extends Veiculo {



	}

	class Veiculo {
		public $placa = null;
		public $cor = null;

		function acelerar() {
			echo 'Acelerar';
		}

		function freiar() {
			echo 'Freiar';
		}

		function trocarMarcha() {
			echo 'Desengatar a embreagem com o pé e trocar a marcha com a mão';
		}

	}

	$obCarro = new Carro('ABC1234', 'Branco');
	$obMoto = new Moto('DEF1122', 'Preto');
	$obCaminhao = new Moto('DEF1122', 'Preto');

	$obCarro->trocarMarcha();
	echo '<br>';
	$obMoto->trocarMarcha();
	echo '<br>';
	$obCaminhao->trocarMarcha();