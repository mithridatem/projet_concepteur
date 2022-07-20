<?php

class BDD{
    private $bdd = null;
    private static $instances = [];
    
    private function __construct(){
        $data = file_get_contents('./secret.json'); 
        // JSON decode
        $obj = json_decode($data); 
        $this->bdd = new PDO(
            $obj->bdd,
            $obj->id, 
            $obj->pwd,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );
    }
    public static function getBDD(){
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls]->bdd;
    }
}


function getAll($bdd, $table){
    try{
        $req = $bdd->prepare("SELECT * FROM $table");
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    catch(Exception $e){
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}
?>
