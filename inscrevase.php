<?php
	$erro_usuario = isset($_GET['erro_usuario']) ? $_GET['erro_usuario'] : 0;
	$erro_email = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0;
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
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<h3>Inscreva-se já.</h3>
					<br />
					<form method="post" action="registra_usuario.php" id="formCadastrarse">
						<div class="form-group">
							<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required="required">
							<?php
								if($erro_usuario) {
									echo 'Usuário já existe.';
								}
							?>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required">
							<?php
								if($erro_email) {
									echo 'E-mail já existe.';
								}
							?>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="required">
						</div>
						
						<button type="submit" class="btn btn-primary form-control">Inscreva-se!</button>
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>		

		<div class="clearfix"></div>



	
		<!-- SCRIPTS JAVASCRIPT  -->
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	
	</body>
</html>