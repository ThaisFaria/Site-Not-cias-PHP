<?php

class Usuario {
	private $login;
	private $senha;
	private $nome;

	public function __construct(string $login, string $senha) {
		$this->login = $login;
		$this->senha = $senha;
		$this->nome = $nome;
	}

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
	}

	public function entrar($vetor) {
		return 1; //retornar verdadeiro ou falso
	}

	public function sair() {
		return 1; //retornar verdadeiro ou falso
	}
}