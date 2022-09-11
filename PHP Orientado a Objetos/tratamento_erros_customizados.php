<?php

class MinhaExceptionCustomizada extends Exception {

	private $erro = '';

	public function __construct($erro) {
		$this->erro = $erro;
	}

	public function exibirMensagemErro() {
		echo '<div style="border: 1px solid #000; padding: 15px; background-color: red; color: #fff">';
		echo $this->erro;
		echo '</div>';
	}

}

try {

	throw new MinhaExceptionCustomizada('Esse é um erro de teste');

	//Error = (php)
	//Exception = (programadores)
	//Customizada = (programadores)

} catch(MinhaExceptionCustomizada $e) {

	$e->exibirMensagemErro();

}