<?php
include_once("./helpers/url.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu BLOG</title>
</head>

<body>

    <header class="cabecalho">

        <nav class="menu">
            <ul>
                <li>
                    <a href="<?= $BASE_URL ?>">Inicio</a>
                </li>
                <li>
                    <a href="<?= $BASE_URL ?>noticias.php">Últimas notícias</a>
                    <!-- <a href=" #noticias">Últimas notícias</a> -->
                    <!-- <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a> -->
                </li>
                <li>
                    <a href="#Esportes">Esportes</a>
                </li>
                <li>
                    <a href="#contato">Entre em contato</a>
                </li>
            </ul>
        </nav>
    </header>
    </header>

</body>

</html>