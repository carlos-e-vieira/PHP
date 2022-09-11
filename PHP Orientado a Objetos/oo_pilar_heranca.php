<?php

class Carro extends Veiculo {
	
	public $tetoSolar = true;

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

}

$obCarro = new Carro('ABC-1234', 'Branca');
$obMoto = new Moto('FGH-7856', 'Preta');

echo '<pre>';
print_r($obCarro);
echo '<br>';
print_r($obMoto);
echo '</pre>';

echo '<br>';
echo $obMoto->freiar();

