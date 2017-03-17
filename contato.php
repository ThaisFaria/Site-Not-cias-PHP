<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Notícias da Hora - Política</title>

	<!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="padroes.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  <script>
  function goBack() {
      window.history.back();
  }
  </script>

</head>
<body>

  <?php include 'header.php';?>

	<div class="container">
		<div class="jumbotron">
  			<div class="container">

	    		<!-- h1 e p que já tínhamos -->
	    		<h1>Contato:</h1>
	    		<p>Envie-nos um e-mail :)</p>

          <form>
            <div class="form-group">
              <label for="name">Seu nome:</label>
              <input type="text" class="form-control" id="email" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Digite seu email">
            </div>
            <div class="form-group">
              <label for="assunto">Assunto:</label>
              <input type="text" class="form-control" id="assunto" placeholder="Digite o assunto"></input>
            </div>
            <div class="form-group">
              <label for="mensagem">Mensagem:</label>
              <textarea class="form-control" rows="5" id="mensagem" placeholder="Digite a sua mensagem"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
            <button class="btn btn-danger" onclick="goBack()">Retornar</button>
            </div>
          </form>

			</div><!-- fim .container dentro do jumbotron -->
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>