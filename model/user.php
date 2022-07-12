<?php
function addUser($bdd, $img=""){
    try{
        $req = $bdd->prepare('INSERT INTO utilisateur (first_name_util, name_util, mail_util, mdp_util, img_util, statut_util) values (:first_name_util, :name_util, :mail_util, :mdp_util, :img_util, 0);');
        $req->execute(array(
            'name_util' => $_POST['name_util'],
            'first_name_util' => $_POST['first_name_util'],
            'mail_util' => $_POST['mail_util'],
            'mdp_util' => password_hash($_POST['pwd_util'], PASSWORD_DEFAULT),
            'img_util' => $img,
        ));

    }
    catch(Exception $e){
        echo $e;
    }
}


function getAllUser($bdd){
    try{
        $req = $bdd->prepare('SELECT * FROM utilisateur');
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    catch(Exception $e){
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}

function getUser($bdd, $id){
    try{
        $req = $bdd->prepare('SELECT * FROM utilisateur where id_util=:id_util');
        $req->execute(
            array('id_util'=>$id)
        );
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    catch(Exception $e){
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}


function deleteUser($bdd){
    try{
        $req = $bdd->prepare('DELETE FROM utilisateur WHERE id_util=:id_util');
        $req->execute(array('id_util' => $_POST['id_util']));
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    catch(Exception $e){
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}


function userDoesExist($bdd){
    try{
        $req = $bdd->prepare('SELECT * FROM utilisateur WHERE mail_util=:mail_util');
        $req->execute(array('mail_util' => $_POST['mail_util']));
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return !empty($data);
    }
    catch(Exception $e){
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}
?>