<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    header('Location: index.php?erro=1');
}
require_once('db.class.php');

$id_usuario = $_SESSION['id'];

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "SELECT DATE_FORMAT(t.tweet_data_inclusao, '%d %b %Y %T') AS tweet_data_inclusao, t.tweet_texto, u.usuario FROM tweet AS t JOIN usuarios AS u ON (t.id_usuario = u.id) WHERE id_usuario = $id_usuario ORDER BY tweet_data_inclusao DESC";

$resultado_id = mysqli_query($link, $sql);

if($resultado_id) {
    while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
        echo '<a href="#" class="list-group-item">';
        echo '<h4 class="list-group-item-heading">'.$registro['usuario'].' <small> - '.$registro['tweet_data_inclusao'].'</small></h4>';
        echo '<p class="list-group-item-text">'.$registro['tweet_texto'].'</div></p>';
        echo '</a>';
    }
} else {
    echo 'Erro ao buscar tweets.';
}
?>