<?php
    session_start();
    if(!isset($_SESSION['usuario'])) {
        header('Location: index.php?erro=1');
	}
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
 
		<div class="container-fluid">
			<div class="row">
				<div class="col-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-12 text-center">
									<h4><?= $_SESSION['usuario'] ?></h4>
								</div>
							</div>
							<hr />
							<div class="row">
								<div class="col-6 texto8 text-center" id="num_tweets"></div>
								<div class="col-6 texto8 text-center" id="num_seguidores"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="card">
						<div class="card-body">
							<div class="input-group">
								<input type="text" id="texto_tweet" name="texto_tweet" class="form-control" placeholder="O que está acontecendo agora?" maxlength="140" />
								<span class="input-group-btn">
									<button class="btn btn-default" type="button" id="btn_tweet" name="btn_tweet">Tweet</button>
								</span>
							</div>
						</div>
					</div>
					<br />
					<div id="tweets" class="list-group"></div>
				</div>
				<div class="col-3">
					<div class="card">
						<div class="card-body text-center">
							<h5><a href="procurar_pessoas.php" id="link_procurar_pessoas">Procurar por pessoas</a></h5>
						</div>
					</div>
				</div>
			</div>
		</div>		

		<!-- SCRIPTS JAVASCRIPT  -->
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/twitter_clone.js"></script>
		<script type="text/javascript">
			function ocultaNav() {
        	$('#nav_login').attr('class', 'nao_exibir');
        	$('#nav_inscrever').attr('class', 'nao_exibir');
        	$('#nav_sair').attr('class', 'nav-item');
   			 }
			ocultaNav();
		</script>
	
	</body>
</html>