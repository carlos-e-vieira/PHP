<?php

interface AparelhosEletronicosInterface {
	public function ligar();
	public function desligar();
}

class Geladeira implements AparelhosEletronicosInterface{
	public function ligar() {
		echo 'Ligar';
	}

	public function desligar() {
		echo 'Desligar';
	}
}

class Tv implements AparelhosEletronicosInterface{
	public function ligar() {
		echo 'Ligar';
	}

	public function desligar() {
		echo 'Desligar';
	}
}

//-----------------------------------------

interface MamiferoTerrestre{
	public function andar();
}

interface MamiferoAquatico{
	public function nadar();
}

interface MamiferoAereo{
	public function voar();
}

class Pessoa implements MamiferoAereo, MamiferoAquatico, MamiferoTerrestre {
	public function andar() {
		echo 'Andar';
	}

	public function nadar() {
		echo 'Nadar';
	}

	public function voar() {
		echo 'Voar';
	}
}

//-----------------------------------------

interface Motor{
	public function motor();
}

interface Rodas extends Motor{
	public function rodas();
}

class Carro implements Rodas{
	public function motor(){

	}

	public function rodas(){

	}
}