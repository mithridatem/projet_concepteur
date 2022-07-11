<?php
//fonctions

function add_user($bdd, $img_path){
    try {
        $req = $bdd->prepare("INSERT INTO utilisateur(name_util, first_name_util, mail_util, mdp_util, img_util) VALUE
        (:name_util, :first_name_util, :mail_util, :mdp_util, :img_util)");

        $req->execute([
            'name_util' => $_POST['name_util'], 
            'first_name_util' => $_POST['first_name_util'],
            'mail_util' => $_POST['mail_util'],
            'mdp_util' => password_hash($_POST['mdp_util'], PASSWORD_DEFAULT),
            'img_util' => $img_path,
        ]);

    } catch (Exception $e) {
        die('Erreur dans la requete:' . $e->getMessage());
    }
}

?>