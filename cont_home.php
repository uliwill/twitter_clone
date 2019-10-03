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
					<div class="input-group">
						<input type="text" id="texto_tweet" name="texto_tweet" class="form-control" placeholder="O que está acontecendo agora?" maxlength="140" />
						<span class="input-group-btn">
							<button class="btn btn-default" type="button" id="btn_tweet" name="btn_tweet">Tweet</button>
						</span>
					</div>
				</div>
			</div>
			<div id="tweets" class="list-group"></div>
		</div>
		<div class="col-3">
			<div class="card">
				<div class="card-body text-center">
					<h5><a href="#">Procurar por pessoas</a></h5>
				</div>
			</div>
		</div>
	</div>
</div>