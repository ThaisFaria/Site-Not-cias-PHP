<?php

class Usuario {
	private $login;
	private $senha;
	private $nome;

	public function __construct($login, $senha) {
		$this->login = $login;
		$this->senha = $senha;
	}

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
	}

	public function entrar(array $vetor) {
		if (strcmp($vetor['login'], $this->login) == 0) {
			if (strcmp($vetor['senha'], $this->senha) == 0) {
				return 1;
			}
		}
		throw new Exception("Login ou senha incorretos");
		return 0;
	}
}