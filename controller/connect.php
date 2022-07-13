<?php
include_once './utils/bdd.php';
$bdd = BDD::getBDD();
include './utils/utils.php';
include './view/connect.php';
$css = "add_user.css";
$content = ob_get_clean();
include './view/template.php';
include './model/user.php';
include './manager/user.php';
$user;
function validate_post($bdd){
    if(!isset($_POST['submit_util'])) return false;
    if(!has_all_args(
        [
            'mail_util',
            'pwd_util'
        ],
        $_POST
        )
    )return false;
    if(!userDoesExist($bdd)){echo"
        <p class='error'>
        Utilisateur invalide1! </p>";
        return false;}
    global $user;
    $user = getUserByMail($bdd, $_POST['mail_util'])[0];
    if(!password_verify($_POST['pwd_util'], $user->mdp_util)){
        echo"
        <p class='error'>Utilisateur invalide2! $user->mdp_util</p>";
        return false;
    }
    return true;
}

if(validate_post($bdd)){
    global $user;
    $_SESSION['user'] = $user;
}

?>