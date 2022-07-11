<?php
//fonctions
function addUser($bdd, $file){
    try{
        $req = $bdd->prepare("insert into utilisateur(name_util, first_name_util, mail_util, mdp_util, img_util) values
            (:name_util, :first_name_util, :mail_util, :mdp_util, :img_util)");
        $req->execute(array(
            'name_util' => $_POST['name_util'],
            'first_name_util' => $_POST['first_name_util'],
            'mail_util' => $_POST['mail_util'],
            'mdp_util' => password_hash($_POST['mdp_util'], PASSWORD_DEFAULT),
            'img_util' => $file
        ));
    }
    catch(Exception $e)
    {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}
?>