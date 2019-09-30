<?php
    require_once('db.class.php');

    $usuario = $_POST['usuario'];
    $email   = $_POST['email'];
    $senha   = $_POST['senha'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = " INSERT INTO usuarios(usuario, email, senha) VALUES ('$usuario',' $email','$senha')";

    if(mysqli_query($link, $sql)) {
        echo 'Usuário registrado com sucesso!';
        header('Location: index.php?cad_usu=1');
    } else {
        echo 'Erro ao registrar o usuário!';
    }


?>