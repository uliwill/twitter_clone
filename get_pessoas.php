<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    header('Location: index.php?erro=1');
}
require_once('db.class.php');

$nome_pessoa = $_POST['nome_pessoa'];
$id_usuario = $_SESSION['id'];

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "SELECT * FROM usuarios WHERE usuario LIKE '%$nome_pessoa%' AND id <> $id_usuario";

$resultado_id = mysqli_query($link, $sql);

if($resultado_id) {
    while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
        /* echo '<div class="card">';
            echo '<div class="card-body">';
                echo '<h5 class="card-title">'.$registro['usuario'].'</h5>';
                echo '<p class="card-text">'.$registro['email'].'</p>';
                echo '<p class="card-text text-right">';
                    echo '<a href="#" class="btn btn-primary btn-sm">Seguir</a>';
                echo '</p>';
            echo '</div>';
        echo '</div>'; */

        echo '<div class="card">';
            echo '<div class="card-body">';
                echo '<div class="row">';
                    echo '<div class="col-9">';
                        echo '<h5 class="card-title">'.$registro['usuario'].'</h5>';
                        echo '<p class="card-text">'.$registro['email'].'</p>';
                    echo '</div>';
                    echo '<div class="col-3">';
                        echo '<p class="card-text text-right">';
                            echo '<a href="#" class="btn btn-primary btn-sm">Seguir</a>';
                        echo '</p>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';

       
    }
} else {
    echo 'Erro ao buscar usuários.';
}
?>