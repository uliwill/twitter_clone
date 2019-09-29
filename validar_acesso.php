<?php
    require_once('db.class.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
    
    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id) {
        $dados_usuario = mysqli_fetch_array($resultado_id);
        var_dump($dados_usuario);
    } else {
        echo 'Erro na execução da consulta ao banco de dados.';
    }
    
?>