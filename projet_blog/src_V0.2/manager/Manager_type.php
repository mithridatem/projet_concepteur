<?php

class Manager_type extends Type
{

    public function get_all_types($bdd): array
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
}
