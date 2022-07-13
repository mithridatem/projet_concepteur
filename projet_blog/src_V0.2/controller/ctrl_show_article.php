<?php 
include './utils/connect_bdd.php';
include './model/Article.php';
include './manager/Manager_article.php';



if(isset($_GET['id']) && !empty($_GET['id'])){
    $continue = true;
}
if($continue && $_GET['id'] !== null){
    $new_article = new Manager_article(null, null, null, null);
    $article_wanted = $new_article->article_by_id($bdd, $_GET['id']);
    if($article_wanted){
        echo $article_wanted->name_art;
        $content_title = "";
        $title = $article_wanted->name_art;    
    }else{
        echo "l'article n'existe pas";
    }
    /**
     * TODO : AJOUTER ob pour envoyer l'article proprement à la vue
     */
}else{
    header("location: ./articles");
}

include './vue/view_one_article.php';
