<?php
include '../view/add_category.php';
include '../utils/bdd.php';
include '../model/type.php';


function validate_post(){
    if(!isset($_POST['submit_util'])) return false;
    if(!isset($_POST['name_type']) 
        or empty($_POST['name_type'])) return false;
    return true;
}

if(validate_post()){
    addType($bdd);
    echo"Type crée avec succès";
}
else{
    echo"Erreur! Le nom est manquant.";
}

?>