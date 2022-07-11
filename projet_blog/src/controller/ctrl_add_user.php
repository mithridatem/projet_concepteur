<?php

include '../vue/add_user.php';
include '../utils/connect_bdd.php';
include '../model/user.php';
#Verifier le contenus des input

if(isset($_POST['submit'])){
    if(!empty($_POST['name_util']) && !empty($_POST['first_name_util']) && !empty($_POST['mail_util']) && !empty($_POST['mdp_util'])){
        if(isset($_FILES['img_util'])){
            $temp_name = $_FILES["img_util"]["tmp_name"];
            $name = $_FILES["img_util"]["name"];
            $size = $_FILES["img_util"]["size"];
            $error = $_FILES["img_util"]["error"];
            $path = "../dist/img/$name";
            move_uploaded_file($temp_name,  $path);

        }else{
            echo 'aucune image ajouter';
            var_dump($_POST);
            $path = "../dist/img/default.jpg";
        }
        add_user($bdd, $path);
        echo '<p  class=" text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-green-600 relative inline-block" > <span class="relative text-white "> Le formulaire est envoyer </span><p>';
    }else{
        echo '<p  class="text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-red-600 relative inline-block " > <span class="relative text-white " >Désoler une erreur est survenue </span> </p> ';
    } 
}


