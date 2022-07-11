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
function addUser($bdd){
    try{
        $req = $bdd->prepare('INSERT INTO utilisateur (first_name_util, name_util, mail_util, mdp_util, img_util, statut_util) values (:first_name_util, :name_util, :mail_util, :mdp_util, "", 0);');
        $req->execute(array(
            'name_util' => $_POST['name_util'],
            'first_name_util' => $_POST['first_name_util'],
            'mail_util' => $_POST['mail_util'],
            'mdp_util' => password_hash($_POST['pwd_util'], PASSWORD_DEFAULT),
        ));

    }
    catch(Exception $e){
        echo $e;
    }
}
?>