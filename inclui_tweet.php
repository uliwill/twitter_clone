<?php

session_start();
require_once('db.class.php');

$texto_tweet = $_POST['texto_tweet'];
$id_usuario = $_SESSION['id'];

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "INSERT INTO tweet(id_usuario, tweet_texto) VALUES($id_usuario, '$texto_tweet')";

mysqli_query($link, $sql);
?>