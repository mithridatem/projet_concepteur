<?php
    //import
    include './view/viewAllArticle.php';
    include './utils/connectBdd.php';
    include './model/article.php';
    //boucle affichage de la liste des articles
    foreach(getAllArticle($bdd) as $value){
        $value->name_art."<br>";
    }
?>