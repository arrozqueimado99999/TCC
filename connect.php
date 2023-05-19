<?php
$con = new \PDO("sqlite:banco.sqlite");

$sql = "CREATE TABLE if not exists artigo (
    codigo INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    titulo VARCHAR(40) NOT NULL,
    texto TEXT NOT NULL
);";

$con->exec($sql);
?>