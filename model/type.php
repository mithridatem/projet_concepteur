<?php
function addType($bdd){
    try{
        $req = $bdd->prepare('INSERT INTO type (name_type) values (:type_name)');
        $req->execute(array(
            'type_name' => $_POST['name_type']
        ));
    }
    catch(Exception $e){
        echo $e;
    }
}


function getAllType($bdd){
    try{
        $req = $bdd->prepare('SELECT * FROM type');
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
        return $data;
        }
        catch(Exception $e)
        {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}
?>