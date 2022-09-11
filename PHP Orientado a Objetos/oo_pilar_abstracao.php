<?php
	
	//definir um modelo
	class Funcionario {

		//atributos
		public $nome = null;
		public $telefone = null;
		public $numeroFilhos = null;
		public $cargo = null;
		public $salario = null;

		//MÉTODOS GETTERS AND SETTERS
		/*
		function setNome($nome) {
			$this->nome = $nome;
		}

		function setNumeroFilhos($numeroFilhos) {
			$this->numeroFilhos = $numeroFilhos;
		}

		function getNome() {
			return $this->nome;
		}

		function getNumeroFilhos() {
			return $this->numeroFilhos;
		}
		*/

		//GETTERS AND SETTERS OVERLOAD / SOBRECARGA
		function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		function __get($atributo) {
			return $this->$atributo;
		}


		//métodos //$this é usado para recuperar o atributo do objeto
		function resumirCadFunc() {
			return "$this->nome possui $this->numeroFilhos filhas";
		}

		function modificarNumeroFilhos($numeroFilhos) {
			//afetar o atributo do objeto

			//recuperar o atributo do objeto através do $this
			//e alterar o o atributo do objeto com o valor recebido por paramentro
			$this->numeroFilhos = $numeroFilhos;
		}

	}

	//instanciando a classe na variavel y
	$y = new Funcionario();
	$y->__set('nome', 'Carlos');
	$y->__set('telefone', '11 99999-8888');
	$y->__set('numeroFilhos', 2);
	$y->__set('cargo', 'Programador');
	$y->__set('salario', 1.901);
	//echo $y->resumirCadFunc();
	echo '<h1>Dados do funcionario</h1> <br><br>';
	echo 'Nome: <span style="font-weight: bold;">' .$y->__get('nome'). '</span><br>';
	echo 'Telefone: <span style="color: green;">' .$y->__get('telefone'). '</span><br>';
	echo 'Qtd filhos: ' .$y->__get('numeroFilhos'). '<br>';
	echo 'Cargo: ' .$y->__get('cargo'). '<br>';
	echo 'Salário: ' .$y->__get('salario'). '<br>';
	
	echo '<hr>';
	
	$x = new Funcionario();
	$x->__set('nome', 'Maria');
	$x->__set('numeroFilhos', 6);
	//echo $y->resumirCadFunc();
	echo $x->__get('nome') .' possui '. $x->__get('numeroFilhos') . ' filhas';
	

?>