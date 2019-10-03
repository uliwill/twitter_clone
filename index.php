<?php
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<?php
			include_once("head.php");
		?>
	</head>

	<body>

	<!-- NAVBAR -->
		<?php
			include_once("navbar.php");
		?>
	<!-- FIM NAVBAR -->

		<?php
			if($erro==1){
				echo '<div class="alert alert-danger text-center" role="alert">';
				echo 'Usuário ou senha inválidos.';
				echo '</div>';
			}
		?>

	    <div class="container" id="conteudo"></div>

		
		<!-- SCRIPTS JAVASCRIPT  -->
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/twitter_clone.js"></script>
		
	
	</body>
</html>