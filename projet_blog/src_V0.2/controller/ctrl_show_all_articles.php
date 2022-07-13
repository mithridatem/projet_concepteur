<?php

include "./utils/connect_bdd.php";
include "./model/Article.php";
include "./manager/Manager_article.php";

$content_title = "Tous les";
$title = "Articles";

/**
 * Affichage pour les article
 */
$articles = new Manager_article(null, null, null, null, null);
#Tout les article

ob_start();

foreach ($articles->get_all_articles($bdd) as $article) {?>
     <hr class="w-full mt-10">
     <a href="./article?id=<?=$article->id_art?>" class="text-2xl"><?=$article->name_art?></a>
<?php }

$articles_content = ob_get_clean();
// #Un article
// echo 'Selected by id :' . $articles->article_by_id($bdd, 1)[1]->name_art;

include "./vue/view_all_articles.php";
