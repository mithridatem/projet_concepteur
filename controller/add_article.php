<?php 
include_once './utils/bdd.php';
$bdd = BDD::getBDD();
include './utils/utils.php';
include './view/add_article.php';
$css = "add_user.css";
$nav=true;
$content = ob_get_clean();
include './view/template.php';
include './model/article.php';
include './manager/article.php';


if(isset($_POST['submit_util']) && 
    has_all_args(
        [
            'name_art',
            'content_art',
            'id_type'
        ], 
        $_POST
    )
){
    $_POST['date_art'] = !empty($_POST['date_art'])? 
        $_POST['date_art'] : 
        date('Y-m-d');
    $article = new ArticleManager(
        $_POST['name_art'],
        $_POST['content_art'],
        $_POST['date_art'],
        $_POST['id_type']
    );
    $article->create($bdd);
    echo"Création réalisée avec succès";
}
else if(isset($_POST['submit_util'])) echo"<p class='error'>
    Veuillez compléter le formulaire</p>";
?>