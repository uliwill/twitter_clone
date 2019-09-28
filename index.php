<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Twitter clone</title>

		<!-- FOLHAS DE ESTILO CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>

	<body>

	<!-- NAVBAR -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#"><img src="imagens/icone_twitter.png" /></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="inscrevase.php">Inscrever-se</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
						Entrar
						</a>
						<div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdown">
							<div class="col-md-12">
								<h5>Você possui uma conta?</h5>
								<form method="post" action="" id="formLogin">
									<div class="form-group">
										<input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
									</div>
									<div class="form-group">
										<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
									</div>
									<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>
									<br /><br />
								</form>
							</div>
						</div>
					</li>
					
				</ul>
			</div>
		</nav>
	<!-- FIM NAVBAR -->


	    <div class="container">

	      <div class="jumbotron">
			<h1 class="display-4">Bem-vindo ao Twitter Clone!</h1>
  			<p class="lead">Veja o que está acontecendo agora...</p>
	      </div>

	      <div class="clearfix"></div>
		</div>

		
		<!-- SCRIPTS JAVASCRIPT  -->
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	
	</body>
</html>