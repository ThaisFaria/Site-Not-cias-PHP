<?php

if (isset($_POST['email'])) {
	$destino = "thais_ods@hotmail.com";
	$assunto = $_POST['assunto'];
	$remetente = $_POST['email'];
	$nome = $_POST['nome'];
	$mensagem = $_POST['mensagem'];

	$header1 = 'From: ' . $remetente;
	$mensagem1 = $nome . ' enviou a mensagem abaixo:' . PHP_EOL . 'Mensagem: ' . $mensagem . PHP_EOL;
	$mensagem1 .= 'Dados do servidor:' . PHP_EOL . 'REMOTE_ADDR: ' . $_SERVER['REMOTE_ADDR'] . PHP_EOL;
	$mensagem1 .= 'REMOTE_USER: ' . $_SERVER['REMOTE_USER'] . PHP_EOL;
	$mensagem1 .= 'SERVER_NAME: ' . $_SERVER['SERVER_NAME'] . PHP_EOL;
	$mensagem1 .= 'SERVER_ADDR: ' . $_SERVER['SERVER_ADDR'];
	mail($destino, $assunto, $mensagem1, $header1);

	$header2 = 'From: ' . $destino;
	$mensagem2 = $nome . ', sua mensagem foi enviada!' . PHP_EOL . 'Mensagem: ' . $mensagem . PHP_EOL;
	$mensagem2 .= 'Dados do servidor:' . PHP_EOL . 'REMOTE_ADDR: ' . $_SERVER['REMOTE_ADDR'] . PHP_EOL;
	$mensagem2 .= 'REMOTE_USER: ' . $_SERVER['REMOTE_USER'] . PHP_EOL;
	$mensagem2 .= 'SERVER_NAME: ' . $_SERVER['SERVER_NAME'] . PHP_EOL;
	$mensagem2 .= 'SERVER_ADDR: ' . $_SERVER['SERVER_ADDR'];
	mail($remetente, $assunto, $mensagem2, $header2);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-mail Enviado</title>

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
	    		<h1>E-mail enviado!</h1>
	    		<p>Responderemos em breve (ou não).</p>

			</div><!-- fim .container dentro do jumbotron -->
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>