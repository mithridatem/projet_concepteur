<?php

include '../vue/add_user.php';
include '../utils/connect_bdd.php';
include '../model/user.php';
$entry = [];
#Verifier le contenus des input
if (isset($_POST['submit'])) {
    if (!empty($_POST['name_util']) && !empty($_POST['first_name_util']) && !empty($_POST['mail_util']) && !empty($_POST['mdp_util'])) {
        if(verify_mail_exist($bdd)){
            if (!empty($_FILES['img_util']['name'])) {
                $temp_name = $_FILES["img_util"]["tmp_name"];
                $name = $_FILES["img_util"]["name"];
                $size = $_FILES["img_util"]["size"];
                $error = $_FILES["img_util"]["error"];
                $path = "$name";
                move_uploaded_file($temp_name,  $path);
            } else {
                $path = "default.jpg";
                $entry_value = '<p  class="text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-red-600 relative inline-block " > <span class="relative text-white " >Aucune image ajouter </span> </p> ';
                array_push($entry, $entry_value);
            }
            add_user($bdd, $path);
            $entry_value = '<p  class=" text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-green-600 relative inline-block" > <span class="relative text-white "> Le formulaire est envoyer </span><p>';
            array_push($entry, $entry_value);
    
        } else {
            $entry_value = '<p  class="text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-red-600 relative inline-block " > <span class="relative text-white " >Désoler une erreur est survenue </span> </p> ';
            array_push($entry, $entry_value);
    
        }
        }else{
            $entry_value = '<p  class="text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-red-600 relative inline-block " > <span class="relative text-white " >Désoler le mail est déjà utilisé <a href="#" class="text-gray-300"> Oublie ? </a> </span> </p> ';
            array_push($entry, $entry_value);
        }

}

    foreach ($entry as $key => $value) {
        echo "$value";
    }





#Appel pour afficher l'ensemble des utilisateur contenus dans notre BDD
/*
var_dump(get_all_user($bdd));
$all_user = get_all_user($bdd);
foreach ($all_user as $value) {
    echo $value->name_util ."<br/>";
}

$all_user[0]->name_util;
*/
/**
 * Actuellement on peut avoir plusieur fois le même utilisateur
 * Faire une méthode pour récuperer un utilisateur
 * SELECT * FROM utilisateur WHERE mail_util = :mail_util
 * $req->execture(array(
 *      "mail_util"=> $_POST['mail_util']; //cherche si un utilisateur à ce mail
 * ))
 * 
 * cette fonction de verification, doit retourner true ou false 
 */