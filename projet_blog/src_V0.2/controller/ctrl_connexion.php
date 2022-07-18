<?php
include './model/User.php';
include './utils/connect_bdd.php';
include './manager/Manager_user.php';

$content_title = "Interface de ";
$title = "Connexion";

if(isset($_GET['error'])  AND $_GET['error'] === '1'){
    echo 'vous êtes connecter <br/>';

}

if(isset($_GET['error'])  AND $_GET['error'] === '2'){
    echo 'erreur de mot de passe <br/>';

}

if(isset($_GET['error'])  AND $_GET['error'] === '3'){
    echo 'erreur le mail n\'existe pas <br/>';

}

#Verification que l'utilisateur à bien appuyer sur le boutton
if(isset($_SESSION["temp_page"])){
    $go_back_link = $_SESSION["temp_page"];
}else{
    $go_back_link = "";
}

if(isset($_POST['submit'])){
    if(!empty($_POST['mail_util'] AND !empty($_POST['mdp_util']))){
        $util = new Manager_user("","", $_POST['mail_util'], $_POST['mdp_util'], "");
        #Verification que le mail exist en base de données
        if(!empty($util->verify_mail_exist($bdd))){
            $user = $util->verify_user($bdd);
            $hash = $user->mdp_util;
            if(password_verify($_POST['mdp_util'], $hash)){
                $_SESSION['id'] = $user->id_util;
                $_SESSION['name'] = $user->name_util;
                $_SESSION['connected'] = true;
                if(isset($_SESSION["temp_page"])){
                header('location: ' .$_SESSION["temp_page"] );

                }else{
                    header('location: connexion?error=1');

                }
            }else{
                header('location: connexion?error=2');
            }
        }else{
            header('location: connexion?error=3');

        }
        
    }
}

include './vue/view_connexion.php';
