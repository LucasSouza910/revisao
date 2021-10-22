<?php

require_once("pessoa.class.php");

class Teste{
	private $pessoa;

	public function __construct(){
		$pessoa = new  Pessoa();

		$pessoa->setNome("Lucas Aguiar <br><br>");
		echo $pessoa->getNome();
	
		$pessoa->setEndereco("Rua Pedro Barros <br><br>");
		echo $pessoa->getEndereco();

		$pessoa->setBairro("Vila Meideiros <br><br>");
		echo $pessoa->getBairro();
	
		$pessoa->setCep("00000-000 <br><br>");
		echo $pessoa->getCep();

		$pessoa->setCidade("São Paulo <br><br>");
		echo $pessoa->getCidade();

		$pessoa->setEstado("SP <br><br>");
		echo $pessoa->getEstado();
	}


}new Teste();

?>