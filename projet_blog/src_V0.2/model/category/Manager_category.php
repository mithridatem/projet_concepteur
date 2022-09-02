<?php

class Manager_type extends Type
{

    public function get_all_types($bdd):array
    {
        try {
            $req = $bdd->prepare("SELECT * FROM type");
            $req->execute();
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            return $data;
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }
    public function get_one_type($bdd, $id):OBJECT
    {
        try {
            $req = $bdd->prepare("SELECT * FROM type WHERE id_type = :id_type");
            $req->execute([
                'id_type'=>$id,
            ]);
            $data = $req->fetch(PDO::FETCH_OBJ);
            return $data;
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }
}
