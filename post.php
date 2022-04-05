<link rel="stylesheet" href="css/styleGrid.css">
<link rel="stylesheet" href="css/styleCabecalho.css">
<?php
include_once("./data/posts.php");
include_once("./templates/header.php");
include_once("./templates/nav.php");
include_once("./templates/footer.php");

if (isset($_GET['id'])) {
    $idSelecionado = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $idSelecionado) {
            $currentPost = $post;
        }
    }
}
?>

<main class="bloco-noticia">
    <div>
        <h1><?= $currentPost['title'] ?></h1>
        <p><?= $currentPost['description'] ?></p>
        <div>
            <img src="./img//<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>" width="250px">
        </div>
    </div>
    <p class="texto">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam quis doloribus incidunt expedita numquam quos quae vitae nisi at earum. Omnis deserunt rem ea excepturi at dignissimos neque temporibus dolorem?
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam quis doloribus incidunt expedita numquam quos quae vitae nisi at earum. Omnis deserunt rem ea excepturi at dignissimos neque temporibus dolorem?
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam quis doloribus incidunt expedita numquam quos quae vitae nisi at earum. Omnis deserunt rem ea excepturi at dignissimos neque temporibus dolorem?
    </p>
</main>
<?php
include_once("./templates/footer.php");
?>