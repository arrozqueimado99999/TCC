<?php

include "ler.php";
include "apagar.php";

?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-md border rounded d-flex p-3 gap-3 justify-content-start flex-column">
        <h3>Seus artigos</h3>
        <div class="container d-flex p-3 gap-3 justify-content-start">
            <?php
                while ($rw = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                print "
                <div class='card light-back' style='width: 25rem;'>
                <div class='card-body'>
                <h4 class='card-tittle'>{$rw['titulo']}</h4>
                <p class='card-text'>{$rw['texto']}</p>
                <button class='btn btn-primary'>Ler mais</button>
                <a class='btn href='apagar/{$codigo['codigo']}' btn-secondary'>Deletar</a>
                </div>
                </div>";
                }

                ?>
        </div>
    </div>
</body>