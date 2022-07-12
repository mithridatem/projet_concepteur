<?php 
include './utils/utils.php';
include './view/add_article.php';
$css = "add_user.css";
$content = ob_get_clean();
include './view/template.php';
include './utils/bdd.php';
include './model/article.php';


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
    addArticle($bdd);
    echo"Création réalisée avec succès";
}
else if(isset($_POST['submit_util'])) echo"<p class='error'>
    Veuillez compléter le formulaire</p>";
?>