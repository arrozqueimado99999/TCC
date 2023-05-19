<?php
include 'connect.php';

$stmt = $con->query("SELECT * FROM artigo
                       ORDER BY codigo");
