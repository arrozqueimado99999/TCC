<?php
include "connect.php";

$titulo = $_POST['titulo_artigo'];
$texto = $_POST['texto_artigo'];

$sql = "INSERT INTO artigo(titulo, texto) VALUES(:titulo, :texto)";
$stmt = $con->prepare($sql);
$stmt->bindValue(':titulo',$titulo);
$stmt->bindValue(':texto',$texto);
$stmt->execute();
?>