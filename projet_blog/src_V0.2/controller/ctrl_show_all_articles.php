<?php

include "./utils/connect_bdd.php";
include "./model/Article.php";
include "./manager/Manager_article.php";
include "./model/Type.php";
include "./manager/Manager_type.php";

$content_title = "Tous les";
$title = "Articles";

/**
 * Affichage pour les article
 */
$articles = new Manager_article(null, null, null, null, null);
$type = new Manager_type(null, null, null);
#Tout les article

ob_start();
foreach ($articles->get_all_articles($bdd) as $article) {
     $actual_type = $type->get_one_type($bdd, $article->id_type);
?>

     <hr class="w-full mt-10">
     <section class="relative">
     <img src="./dist/img/<?= $actual_type->img_type ?>" alt="" class="w-full h-80 object-cover object-center">

     <a href="./article?id=<?= $article->id_art ?>" class="text-6xl"><?= $article->name_art ?></a>

     </section>

<?php }

$articles_content = ob_get_clean();
// #Un article
// echo 'Selected by id :' . $articles->article_by_id($bdd, 1)[1]->name_art;

include "./vue/view_all_articles.php";
