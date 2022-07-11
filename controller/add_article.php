<?php 
include '../utils/utils.php';
include '../view/add_article.php';


if(isset($_POST['submit_util']) &&  has_all_args(['name_art', 'content_art'], $_POST)){
    echo_existing(post_element('name_art'));
    echo_existing(post_element('content_art'));
    $date = empty(post_element('date_art'))? date('Y-m-d') : post_element('date_art');
    echo_existing($date);
}
else if(isset($_POST['submit_util'])) echo"<p class='error'>Veuillez compléter le formulaire</p>";
?>