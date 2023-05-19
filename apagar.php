<?php
include 'connect.php';

$codigo = $_GET['apagar/?'];
$sql = "DELETE FROM artigo WHERE codigo = :codigo";
$stmt = $con->prepare($sql);
$stmt->execute([':codigo' => $codigo]);