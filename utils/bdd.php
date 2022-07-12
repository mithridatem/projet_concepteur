<?php
$file = '../secret.json'; 

$data = file_get_contents($file); 
// JSON decode
$obj = json_decode($data); 
$bdd = new PDO(
    $obj->bdd,
    $obj->id, 
    $obj->pwd,
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
);

?>