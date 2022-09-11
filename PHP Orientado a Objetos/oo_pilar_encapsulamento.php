<?php

	class Pai {

		private $nome = 'Carlos';
		protected $sobrenome = 'Vieira';
		public $humor = 'Feliz';

		public function __get($attr) {
			return $this->$attr;
		}

		public function __set($attr, $value) {
			$this->$attr = $value;
		}

		private function executarMaria() {
			echo 'Assobiar <br>';
		}

		protected function responder() {
			echo 'Hi';
		}

		public function executarAcao() {

			$x = rand(1, 10);

			if ($x <= 5) {
				$this->responder();
			} else {
				$this->executarMaria();
			}
			
		}

	}

	class Filho extends Pai {
		public function __construct() {
				//EXIBIR OS MÉTODOS DO OBJETO
				echo '<pre>';
				print_r(get_class_methods($this));
				echo '</pre>';
		}
	}

	/*
	$obPai = new Pai();
	echo $obPai->executarAcao();
	*/

	$obFilho = new Filho();
	echo '<pre>'; print_r($obFilho); echo '</pre>';

?>