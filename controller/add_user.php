<?php
include_once './utils/bdd.php';
$bdd = BDD::getBDD();
include './utils/utils.php';
include './view/add_user.php';
$css = "add_user.css";
$nav = true;
$content = ob_get_clean();
include './view/template.php';
include './utils/validator.php';
include './model/user.php';
include './manager/user.php';


function validate_post($bdd){
    if(!isset($_POST['submit_util'])) return false;
    if(!has_all_args(
        [
            'first_name_util',
            'name_util',
            'mail_util',
            'pwd_util'
        ],
        $_POST
        )
    )return false;
    if(!email_validator($_POST['mail_util'])) {
        echo"<p class='error'>Email invalide</p>";
        return false;
    }
    if(!password_validator($_POST['pwd_util'])) {
        echo"<p class='error'>Mot de passe invalide! 
            Minimum 8 caractères, une majuscule, 
            une minuscule et un caractère spécial.</p>";
        return false;
    }
    if(userDoesExist($bdd)){echo"<p class='error'>
        Cet utilisateur existe déjà! </p>";
        return false;}
    return true;
}


if(validate_post($bdd)){
    $user = new UserManager(
        $_POST['first_name_util'],
        $_POST['name_util'],
        $_POST['mail_util'],
        $_POST['pwd_util'],
    );
    if (isset($_FILES['img_util'])){
        $name = $_FILES['img_util']['name'];
        $date = new DateTime();
        $name = $date->getTimestamp().$name;
        $temp = $_FILES['img_util']['tmp_name'];
        $f = move_uploaded_file($temp, "./asset/$name");
        $user->setImage("./asset/$name");
    }
    $user->create($bdd);
    echo"Requête réalisée avec succès";
} 
else if(isset($_POST['submit_util'])) echo"<p class='error'>
    Veuillez compléter le formulaire</p>";
?>