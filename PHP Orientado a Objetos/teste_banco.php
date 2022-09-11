<?php

	class Conta {

		private $deposito = 200;
		private $saque = 100;
		public $saldo;

		public function getDeposito() {

			return $this->deposito;

		}

		public function setDeposito($value) {

			$this->deposito = $value;

		}

		public function calcularSaldo() {

			$this->saldo = $this->deposito - $this->saque;
			return $this->saldo;
		}

	}

	$obConta = new Conta();

	echo $obConta->saldo;

?>