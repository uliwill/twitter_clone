<?php

class db {

	private $host = 'localhost';
	private $database = 'twitter_clone';
	private $usuario = 'root';
	private $senha = '';

	public function conecta_mysql() {
        $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database );
        mysqli_set_charset($con, 'utf8');
        if(mysqli_connect_errno()){
            echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();
        }

        return $con;
	}
}

?>