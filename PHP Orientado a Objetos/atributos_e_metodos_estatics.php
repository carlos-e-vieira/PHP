<?php

class Exemplo {

	public static $atributo1 = 'Eu sou um atributo estatico';
	public $atributo2 = 'Eu sou um atributo nromal';

	public static function metodo1() {
		echo 'Eu sou um método estatico';
	}

	public function metodo2() {
		echo 'Eu sou um método normal';
	}

}

echo Exemplo::$atributo1;
echo '<br>';
echo Exemplo::metodo1();