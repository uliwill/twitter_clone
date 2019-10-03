<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><img src="imagens/icone_twitter.png" alt="Logo Twitter"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
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
                        <form method="post" action="validar_acesso.php" id="formLogin">
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
            <li class="nav-item">
                <a class="nav-link" href="sair.php">Sair</a>
            </li>
        </ul>
    </div>
</nav>