<?php
    session_start();
    if(!isset($_SESSION['usuario'])) {
        header('Location: index.php?erro=1');
    }
?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Twitter Clone</title>

		<!-- FOLHAS DE ESTILO CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
	
	</head>

	<body>

	<!-- NAVBAR -->
		<?php
			include_once("navbar.html");
		?>
	<!-- FIM NAVBAR -->
 
		<div class="container-fluid">
            Usuário autenticado!
            <br />
            <?= $_SESSION['usuario'] ?>
            <br />
            <?= $_SESSION['email'] ?>
		</div>		

		<div class="clearfix"></div>



	
		<!-- SCRIPTS JAVASCRIPT  -->
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	
	</body>
</html>