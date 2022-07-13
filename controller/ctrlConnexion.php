<?php
    include './model/utilisateur.php';
    include './utils/connectBdd.php';
    include './manager/utilisateur.php';
    include './view/viewConnexion.php';
    //test identifiant
    if(isset($_POST['submit'])){
        if(!empty($_POST['mail_util']) AND !empty($_POST['mdp_util'])){
            $util = new ManagerUtilisateur("","",$_POST['mail_util'],$_POST['mdp_util'], "");
            //test si l'utilisateur existe
            if($util->getAllUserbyMail($bdd)){
                $user = $util->getUser($bdd);
                $hash = $user->mdp_util;
                //test si le mot de passe est correct
                if(password_verify($_POST['mdp_util'],$hash)){
                    $_SESSION['id'] = $user->id_util;
                    $_SESSION['name'] = $user->name_util;
                    $_SESSION['connected'] = true;
                    header('location: connexion?error=1');
                }
                else{
                    header('location: connexion?error=3');
                }
            }
            else{
                header('location: connexion?error=2');
            }
        }
    }
?>