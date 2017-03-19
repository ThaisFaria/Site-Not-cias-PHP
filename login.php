<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

	<?php include 'html-bootstrap.php'?>

	<title>Login</title>

</head>
<body>

  <?php include 'header.php';?>

	<div class="container">
		<div class="jumbotron">
  			<div class="container">

	    		<h1>Login</h1>
	    		<br/>
	    		<?php if (!empty($_SESSION['mensagem'])): ?>
					<div class="alert alert-danger" role="alert">
						<?=$_SESSION['mensagem']?>
					</div>
	    			<?php unset($_SESSION['mensagem']);?>
				<?php endif;?>

	    		<?php if (!empty($_SESSION['usuario'])): ?>
					<div class="alert alert-success" role="alert">
						<?=$_SESSION['nome']?>, você já se encontra logado(a)!
					</div>
				<?php endif;?>

	    		<form action="autentica.php" method="POST" class="col-md-4 col-md-offset-4">
	    			<div class="form-group">
	    				<label for="login">Login:</label>
	    				<input type="text" class="form-control" name="login">
	    			</div>
	    			<div class="form-group">
	    				<label for="senha">Senha:</label>
	    				<input type="password" class="form-control" name="senha">
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