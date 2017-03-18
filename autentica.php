<?php
include 'Usuario.php';

$usuario = new Usuario('thais', '123456');
$usuario->nome = 'Thais Faria';

try {
	if (isset($_POST['login'])) {
		$vetor['login'] = $_POST['login'];
		$vetor['senha'] = $_POST['senha'];
		if ($usuario->entrar($vetor)) {
			session_start();
			$_SESSION['usuario'] = $usuario;
			$_SESSION['nome'] = $usuario->nome;
			header("Location: ./bem-vindo.php");
			exit();
		}
	}
} catch (Exception $e) {
	session_start();
	$_SESSION['mensagem'] = $e->getMessage();
	header("Location: ./login.php");
	exit();
}

?>