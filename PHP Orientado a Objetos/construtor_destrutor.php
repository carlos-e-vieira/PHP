<?php

	class Pessoa {

		public $nome = null;

		function __construct($nome) {
			echo 'Objeto iniciado';
			$this->nome = $nome;
		}

		function __destruct() {
			echo 'Objeto removido';
		}

		function __get($atributo) {
			return $this->$atributo;
		}

		function correr() {
			return $this->__get('nome'). ' está correndo';
		}

	}

	$obPessoa = new Pessoa('Carlos');
	echo '<br>Nome: '. $obPessoa->__get('nome');
	echo '<br>'. $obPessoa->correr();

	echo '<br>';
	unset($obPessoa);

?>