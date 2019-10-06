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
								<div class="col-6 texto8 text-center">TWEETS<br />1</div>
								<div class="col-6 texto8 text-center">SEGUIDORES<br />1</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="card">
						<div class="card-body">
							<form class="input-group" id="form_procurar_pessoas">
								<input type="text" id="nome_pessoa" name="nome_pessoa" class="form-control" placeholder="Quem você está procurando?" maxlength="140" />
								<span class="input-group-btn">
									<button class="btn btn-default" type="button" id="btn_procurar_pessoa" name="btn_procurar_pessoa">Procurar</button>
								</span>
                            </form>
						</div>
                    </div>
                    <br />
					<div id="pessoas"></div>
				</div>
				<div class="col-3">
					<div class="card">
						<div class="card-body text-center">
							
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
        	$('#nav_login').attr('class', 'invisible');
        	$('#nav_inscrever').attr('class', 'invisible');
        	$('#nav_sair').attr('class', 'nav-item');
   			 }
			ocultaNav();
		</script>
	
	</body>
</html>