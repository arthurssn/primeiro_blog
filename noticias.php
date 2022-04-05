<?php
include_once("./data/posts.php");
include_once("./templates/header.php");
include_once("./templates/footer.php");
include_once("./data/ultimasNoticias.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleCabecalho.css">
    <title>Últimas notícias</title>
</head>

<body>
    <div class="bloco-noticia">
        <nav style="text-align: center; text-decoration: none"><b>ÚLTIMAS NOTÍCIAS</b></nav>
        <div>
            <?php foreach ($noticias as $noticia) : ?>
                <div>
                    <img class="noticia" src="img\<?= $noticia['img'] ?>" alt="Nao foi possível carregar a imagem" width="120px">

                    <h4 class="texto">
                        <a href="<?= $BASE_URL ?>postNoticias.php?not=<?= $noticia['not'] ?>"><?= $noticia['title'] ?></a>
                    </h4>
                </div>
                <br>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>