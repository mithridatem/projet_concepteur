<?php
$file = './secret.json'; 

$data = file_get_contents($file); 
// JSON decode
$obj = json_decode($data); 
$bdd = new PDO(
    $obj->bdd,
    $obj->id, 
    $obj->pwd,
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
);


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