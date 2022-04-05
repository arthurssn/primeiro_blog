<link rel="stylesheet" href="css/styleGrid.css">
<link rel="stylesheet" href="css/styleCabecalho.css">
<?php
include_once("./data/ultimasNoticias.php");
include_once("./templates/header.php");
include_once("./templates/nav.php");
include_once("./templates/footer.php");


if (isset($_GET['not'])) {
    $idSelecionado = $_GET['not'];
    $noticialAtual;

    foreach ($noticias as $noticia) {
        if ($noticia['not'] == $idSelecionado) {
            $noticialAtual = $noticia;
        }
    }
}
?>

<main>
    <div>
        <h1><?= $noticialAtual['title'] ?></h1>
        <div>
            <img src="./img//<?= $noticialAtual['img'] ?>" alt="<?= $noticialAtual['title'] ?>">
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