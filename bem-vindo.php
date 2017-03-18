<?php
session_start();
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

	    		<h1>Bem-vindo(a)!</h1>
	    		<br/>
	    		<p>Olá <?=$_SESSION['nome'];?>!</p>
				<br/>
				<p><a href="propagar-usuario.php">Ir para a página propagar-usuario.php e sair</a></p>
			</div>
		</div>
	</div>

	<?php include 'html-jquery.php'?>

</body>
</html>