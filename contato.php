<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>

	<?php include 'html-bootstrap.php'?>

	<title>Contato</title>

</head>
<body>

  <?php include 'header.php';?>

	<div class="container">
		<div class="jumbotron">
  			<div class="container">

	    		<h1>Contato</h1>
	    		<br/>
	    		<p>Entre em contato conosco :)</p>

	    		<form action="enviar_email.php" method="POST">
	    			<div class="form-group">
	    				<label for="nome">Nome:</label>
	    				<input type="text" class="form-control" name="nome">
	    			</div>
	    			<div class="form-group">
	    				<label for="email">Email:</label>
	    				<input type="email" class="form-control" name="email">
	    			</div>
	    			<div class="form-group">
	    				<label for="assunto">Assunto:</label>
	    				<input type="text" class="form-control" name="assunto">
	    			</div>
	    			<div class="form-group">
	    				<label for="mensagem">Mensagem:</label>
	    				<textarea class="form-control" rows="5" name="mensagem"></textarea>
	    			</div>
	    			<button class="btn btn-default" type="submit">Enviar</button>
	    			<button class="btn btn-danger" onclick="history.go(-1);">Voltar</button>
	    		</form>

			</div>
		</div>
	</div>

	<?php include 'html-jquery.php'?>

</body>
</html>