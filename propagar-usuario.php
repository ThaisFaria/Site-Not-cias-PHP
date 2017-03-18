<?php
session_start();
$nome = $_SESSION['nome'];
unset($_SESSION['usuario']);
unset($_SESSION['nome']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>

	<?php include 'html-bootstrap.php'?>

	<title>Bem-vindo(a)!</title>

</head>
<body>

  <?php include 'header.php';?>

	<div class="container">
		<div class="jumbotron">
  			<div class="container">

	    		<h1>Tchauzinho!</h1>
	    		<br/>
	    		<p>Volte sempre <?=$nome;?>!</p>
				<br/>
				<p><a href="login.php">Voltar para a tela de login</a></p>
			</div>
		</div>
	</div>

	<?php include 'html-jquery.php'?>

</body>
</html>