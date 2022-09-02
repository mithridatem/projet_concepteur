<?php

require "./utils/connect_bdd.php";
require "./model/article/Article.php";
require "./model/article/Manager_article.php";
require "./model/category/Category.php";
require "./model/category/Manager_category.php";

$content_title = "Tous les";
$title = "Articles";

/**
 * Affichage pour les article
 */
$articles = new Manager_article(null, null, null, null, null);
$type = new Manager_type(null, null, null);
#Tous les article

ob_start();
foreach ($articles->get_all_articles($bdd) as $article) {
     $actual_type = $type->get_one_type($bdd, $article->id_type);
?>

     <section class="relative mt-20 ">
     <img src="./dist/img/<?= $actual_type->img_type ?>" alt="" class=" w-[600px] max-h-[240px] mx-auto  object-cover object-center">

     <a href="./article?id=<?= $article->id_art ?>" class="text-6xl"><?= $article->name_art ?></a>

     </section>

<?php }

$articles_content = ob_get_clean();
// #Un article
// echo 'Selected by id :' . $articles->article_by_id($bdd, 1)[1]->name_art;

include "./vue/view_all_articles.php";
