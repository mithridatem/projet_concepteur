<?php

include '../vue/add_user.php';
#Verifier le contenus des input

if(isset($_POST['submit'])){
    if(!empty($_POST['name_util']) && !empty($_POST['first_name_util']) && !empty($_POST['mail_util']) && !empty($_POST['mdp_util'])){
        echo '<p class="text-center text-green-600" >Le formulaire est envoyer<p>';
    }else{
        echo '<p class="text-center text-red-600" > Désoler une erreur est survenue </p>';
    } 
}
