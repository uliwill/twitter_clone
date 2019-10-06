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

//$sql = "SELECT * FROM usuarios WHERE usuario LIKE '%$nome_pessoa%' AND id <> $id_usuario";
$sql = "SELECT u.*, us.* ";
$sql.= "FROM usuarios AS u ";
$sql.= "LEFT JOIN usuarios_seguidores AS us ";
$sql.= "ON (us.id_usuario = $id_usuario AND u.id = us.seguindo_id_usuario) ";
$sql.= "WHERE u.usuario LIKE '%$nome_pessoa%' AND u.id <> $id_usuario";

$resultado_id = mysqli_query($link, $sql);

if($resultado_id) {
    while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
        echo '<div class="card">';
            echo '<div class="card-body">';
                echo '<div class="row">';
                    echo '<div class="col-7">';
                        echo '<h5 class="card-title">'.$registro['usuario'].'</h5>';
                        echo '<p class="card-text">'.$registro['email'].'</p>';
                    echo '</div>';
                    echo '<div class="col-5">';
                        echo '<p class="card-text text-right">';
                            $seguindo_sn = isset($registro['id_usuario_seguidor']) && !empty($registro['id_usuario_seguidor']) ? 'S' : 'N';

                            if($seguindo_sn == 'N') {
                                echo '<a href="#" id="btn_seguir_'.$registro['id'].'" class="btn btn-primary btn-sm btn_seguir" data-id_usuario="'.$registro['id'].'">Seguir</a>';
                                echo '<a href="#" id="btn_deixar_seguir_'.$registro['id'].'" class="btn btn-danger btn-sm btn_deixar_seguir nao_exibir" data-id_usuario="'.$registro['id'].'">Deixar de Seguir</a>';
                            } else {
                                echo '<a href="#" id="btn_seguir_'.$registro['id'].'" class="btn btn-primary btn-sm btn_seguir nao_exibir" data-id_usuario="'.$registro['id'].'">Seguir</a>';
                                echo '<a href="#" id="btn_deixar_seguir_'.$registro['id'].'" class="btn btn-danger btn-sm btn_deixar_seguir" data-id_usuario="'.$registro['id'].'">Deixar de Seguir</a>';
                            }

                            
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