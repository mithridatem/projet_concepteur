<?php
    class ManagerType extends Type{
        //retourne la liste des types
        public function getAlltype($bdd):array{
            try{
                $req = $bdd->prepare("SELECT * FROM type");
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                return $data;
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>