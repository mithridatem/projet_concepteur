<?php

include './vue/add_article.php';
include './utils/connect_bdd.php';
include './model/article.php';
#Récuperation de la date 
#Verifier le contenus des input
if(isset($_POST['submit'])){
    if(!empty($_POST['name_art']) && !empty($_POST['content_art'])){
        if(empty($_POST['date_art'])){
            $_POST['date_art'] = date("Y-m-d");
        }
        add_article($bdd);
        echo '<p class="text-center text-green-600"> L\'article est envoyer </p>';
    }else{
        echo '<p class="text-center text-red-600" > Désoler une erreur est survenue </p>';
    }
   
}


