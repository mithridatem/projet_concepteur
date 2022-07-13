<?php
    include './model/utilisateur.php';
    include './utils/connectBdd.php';
    include './manager/ManageUtilisateur.php';
    include './view/viewConnexion.php';
    //gestion des erreurs

    if(isset($_SESSION['connected']) && $_SESSION['connected'] == true){
        header('location:allArticle');
    }
    
    if(isset($_GET['error']) AND $_GET['error']==1){

        echo $_SESSION['name'].' connecté ';
    }
    if(isset($_GET['error']) AND $_GET['error']==2){
        echo 'Le compte n\'existe pas';
    }
    if(isset($_GET['error']) AND $_GET['error']==3){
        echo 'Le mot de passe est incorrect';
    }
    
    //test identifiant
    if(isset($_POST['submit'])){
        if( !empty($_POST['mail_util']) AND !empty($_POST['mdp_util'])){
            // var_dump('in');
            $util = new ManagerUtilisateur("","",$_POST['mail_util'],$_POST['mdp_util'], "");
            //test si l'utilisateur existe
            $exists = $util->getUserbyMail($bdd);
            if($exists){
                // var_dump($exists);
                $user = $exists[0];
                $hash = $user->mdp_util;

                //var_dump($user);
                //test si le mot de passe est correct
                if(password_verify($_POST['mdp_util'],$hash)){
                    // var_dump($user);
                    $_SESSION['id'] = $user->id_util;
                    $_SESSION['name'] = $user->name_util;
                    $_SESSION['connected'] = true;
                    header('location:connection?error=1');
                }
                else{
                    header('location:connection?error=3');
                } 
            }
            else{
                header('location:connection?error=2');
            }
        }else{
            echo'wut is hapening';
        }
    }
?>