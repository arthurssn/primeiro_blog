<?php
include_once("./data/posts.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styleText.css">
</head>

<body>
    <div class="bloco-noticia">
        <?php foreach ($posts as $post) : ?>
            <div>
                <img src="img\<?= $post['img'] ?>" alt="Nao foi possível carregar a imagem" width="250px">
                <h2>
                    <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                </h2>
                <p><?= $post['description'] ?></p>
                <div>
                    <?php foreach ($post['tags'] as $tag) : ?>
                        <a href="#"><?= $tag ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>