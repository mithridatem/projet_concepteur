<?php

include '../vue/add_article.php';
#Verifier le contenus des input
if(isset($_POST['submit'])){
    if(!empty($_POST['name_art']) && !empty($_POST['content_art'])){
        echo '<p class="text-center text-green-600"> Le formulaire est envoyer </p>';
    }else{
        echo '<p class="text-center text-red-600" > Désoler une erreur est survenue </p>';
    }
}
