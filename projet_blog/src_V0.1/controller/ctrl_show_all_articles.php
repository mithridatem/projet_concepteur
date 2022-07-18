<?php

include "../vue/view_all_articles.php";
include "../utils/connect_bdd.php";
include "../model/article.php";



/**
 * Affichage pour les article
 */
#Tout les article
echo '<hr class="w-full mt-40">';
foreach (get_all_articles($bdd) as $article) {
    echo $article->name_art . "<br/>";
}
#Un article
echo 'Selected by id :' . article_by_id($bdd, 1)[0]->name_art;