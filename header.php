<?php

function echoActiveClassIfRequestMatches($requestUri) {
	$current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

	if ($current_file_name == $requestUri) {
		echo 'class="active"';
	}

}

?>
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Notícias da Hora</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-left">
				<li <?=echoActiveClassIfRequestMatches("index")?> >
					<a href="index.php">Destaques</a>
				</li>
				<li <?=echoActiveClassIfRequestMatches("politica")?> >
					<a href="politica.php">Política</a>
				</li>
				<li <?=echoActiveClassIfRequestMatches("esportes")?> >
					<a href="esportes.php">Esportes</a>
				</li>
				<li <?=echoActiveClassIfRequestMatches("seguranca")?> >
					<a href="seguranca.php">Segurança</a>
				</li>
				<li <?=echoActiveClassIfRequestMatches("contato")?> >
					<a href="contato.php">Contato</a>
				</li>
				<li <?=echoActiveClassIfRequestMatches("login")?> >
					<a href="login.php">Login</a>
				</li>
			</ul>
			<?php if (!empty($_SESSION['usuario'])): ?>
				<ul class="nav navbar-nav navbar-right">
					<li <?=echoActiveClassIfRequestMatches("bem-vindo")?> >
						<a href="bem-vindo.php"><?=$_SESSION['nome']?></a>
					</li>
				</ul>
			<?php endif;?>
		</div><!--/.nav-collapse -->
		<div>

		</div>
	</div>
</nav>