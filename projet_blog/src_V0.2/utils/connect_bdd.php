<?php

#Instanciation de l'objet PDO pour pouvoir ce connecter à la bdd

// $bdd = new PDO('mysql:host=localhost;dbname=blog_folio', 'root', '',
// array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$bdd = BDD::getBDD();

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
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
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

?>