<?php
    require_once('db.class.php');

    $usuario = $_POST['usuario'];
    $email   = $_POST['email'];
    $senha   = md5($_POST['senha']);

    $objDb = new db();
    $link = $objDb->conecta_mysql();
    
    // verificar se usuário existe
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    if($resultado_id = mysqli_query($link, $sql)) {
        $dados_usuario = mysqli_fetch_array($resultado_id);
        if(isset($dados_usuario['usuario'])) {
            echo 'Usuário já cadastrado.<br /><br />';
        } else {
            echo 'Usuário não cadastrado.<br /><br />';
        }
    } else {
        echo 'Erro ao tentar localizar o registro de usuário.';
    }
     // verificar se e-mail existe
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
     if($resultado_id = mysqli_query($link, $sql)) {
         $dados_usuario = mysqli_fetch_array($resultado_id);
         if(isset($dados_usuario['email'])) {
             echo 'E-mail já cadastrado.<br /><br />';
         } else {
             echo 'E-mail não cadastrado.<br /><br />';
         }
     } else {
         echo 'Erro ao tentar localizar o registro de e-mail.';
     }
    

    die();


    $sql = "INSERT INTO usuarios(usuario, email, senha) VALUES ('$usuario','$email','$senha')";

    if(mysqli_query($link, $sql)) {
        echo 'Usuário registrado com sucesso!';
        header('Location: index.php');
    } else {
        echo 'Erro ao registrar o usuário!';
    }


?>