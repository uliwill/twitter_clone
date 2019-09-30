<?php
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>
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
		<?php
			include_once("navbar.html");
		?>
	<!-- FIM NAVBAR -->

		<?php
			if($erro==1){
				echo '<div class="alert alert-danger text-center" role="alert">';
				echo 'Usuário ou senha inválidos.';
				echo '</div>';
			}
		?>

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