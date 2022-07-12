<?php
include '../utils/utils.php';
include '../view/delete_user.php';
include '../utils/bdd.php';
include_once '../model/user.php';


function validate_post(){
    if(!isset($_POST['submit_util'])) return false;
    if(empty($_POST['id_util'])) {
        echo"<p class='error'>Veuillez sélectionner un utilisateur</p>";
        return false;
    }
    return true;
}


if(validate_post()){
    $img = getUser($bdd, $_POST['id_util'])[0]->img_util;
    unlink("../asset/$img");
    deleteUser($bdd);
    echo"Requête réalisée avec succès";
} 
else if(isset($_POST['submit_util'])) echo"<p class='error'>
    Veuillez compléter le formulaire</p>";
?>