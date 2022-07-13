<?php
    include './model/utilisateur.php';
    include './utils/connectBdd.php';
    include './manager/utilisateur.php';
    include './view/viewConnexion.php';
    //gestion des erreurs
    if(isset($_GET['error']) AND $_GET['error']==1){
        echo $_SESSION['name'].' connecté ';
        echo '<script>
        setTimeout(()=>{document.location.href="connexion"; }, 3000)</script>';
    }
    if(isset($_GET['error']) AND $_GET['error']==2){
        echo 'Le compte n\'existe pas';
    }
    if(isset($_GET['error']) AND $_GET['error']==3){
        echo 'Le mot de passe est incorrect';
    }
    if(isset($_GET['error']) AND $_GET['error']=='interdit'){
        echo 'vous n\'avez pas le droit';
    }
    
    //test identifiant
    if(isset($_POST['submit'])){
        if(!empty($_POST['mail_util']) AND !empty($_POST['mdp_util'])){
            $util = new ManagerUtilisateur("","",$_POST['mail_util'],$_POST['mdp_util'], "");
            //test si l'utilisateur existe
            if($util->getAllUserbyMail($bdd)){
                $user = $util->getUser($bdd);
                $hash = $user[0]->mdp_util;
                echo $hash;
                //test si le mot de passe est correct
                if(password_verify($_POST['mdp_util'],$hash)){
                    $_SESSION['id'] = $user[0]->id_util;
                    $_SESSION['name'] = $user[0]->first_name_util;
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