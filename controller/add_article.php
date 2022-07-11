<?php 
include '../utils/utils.php';
include '../view/add_article.php';


if(isset($_POST['submit_util']) &&  has_all_args(['name_art', 'content_art', 'date_art'], $_POST)){
    echo_existing(post_element('name_art'));
    echo_existing(post_element('content_art'));
    echo_existing(post_element('date_art'));
}
else echo"Erreur! Tous les champs nécessaires n'ont pas été remplis";
?>