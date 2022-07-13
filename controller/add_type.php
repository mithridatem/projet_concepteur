<?php
include_once './utils/bdd.php';
$bdd = BDD::getBDD();
include './utils/utils.php';
include './view/add_category.php';
$css = "add_user.css";
$nav = true;
$content = ob_get_clean();
include './view/template.php';
include './model/type.php';
include './manager/type.php';


function validate_post(){
    if(!isset($_POST['submit_util'])) return false;
    if(!isset($_POST['name_type']) 
        or empty($_POST['name_type'])) return false;
    return true;
}

if(validate_post()){
    $type = new TypeManager($_POST['name_type']);
    $type->create($bdd);
    echo"Type crée avec succès";
}
else if(isset($_POST['submit_util'])){
    echo"Erreur! Le nom est manquant.";
}

?>