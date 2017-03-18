<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contato</title>

	<!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="padroes.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

  <?php include 'header.php';?>

	<div class="container">
		<div class="jumbotron">
  			<div class="container">

	    		<!-- h1 e p que já tínhamos -->
	    		<h1>Contato</h1>
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

			</div><!-- fim .container dentro do jumbotron -->
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>