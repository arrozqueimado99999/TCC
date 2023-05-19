<?php
include "navbar.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo artigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid d-flex flex-column gap-3 p-3">
        <div class="container-md border rounded p-3 d-flex gap-3 justify-content-start flex-column">
            <h3 class="tittle">Escrever artigo</h3>
            <form action="escrita.php" method="post">
            <input type="text" required class="form-control" placeholder="Título" name="titulo_artigo" id="titulo_artigo">
            <textarea name="texto_artigo" required style="resize: none;" class="form-control" placeholder="Digite seu texto" id="texto_artigo" cols="30" rows="10"></textarea>
            <input type="submit" class="btn btn-primary" value="Salvar e enviar">
            </form>
        </div>
    </div>
</body>

<?php

include "ler_tela.php";