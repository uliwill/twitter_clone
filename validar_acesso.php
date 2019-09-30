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
        
        if(isset($dados_usuario['usuario'])){
            header('Location: index.php?login=1');
        } else {
            header('Location: index.php?erro=1');
        }
    } else {
        echo 'Erro na execução da consulta ao banco de dados.';
    }
    
?>