<?php
    //imports
    include './view/viewAddUser.php';
    include './utils/connectBdd.php';
    include './model/utilisateur.php';
    include './manager/ManageUtilisateur.php';
    $file = "default.jpg";
    $userBean= new ManagerUtilisateur();
    //test vérifier le contenu des inputs
    //test si submit à été cliqué
    if(isset($_POST['submit'])){
        //test si les champs sont remplis
        if(!empty($_POST['name_util']) AND !empty($_POST['first_name_util']) AND 
        !empty($_POST['mail_util']) AND !empty($_POST['mdp_util'])){
            if($_FILES['img_util']['name']!=""){
                $tmpName = $_FILES['img_util']['tmp_name'];
                $name = $_FILES['img_util']['name'];
                $size = $_FILES['img_util']['size'];
                $error = $_FILES['img_util']['error'];
                $file = "../asset/images/$name";
                $fichier = move_uploaded_file($tmpName, $file);
                $userBean->addUser($bdd,$name);
            }
            else{
                $userbean->addUser($bdd,$file);
            }
            echo "l'utilisateur suivant à été ajouté : ".$_POST['name_util']. " ". $_POST['first_name_util'];
        }
        else{
            echo "veuillez remplir tous les champs de formulaire";
        } 
    }
    else{
        echo "veuillez compléter le formulaire";
    }

    $tab = $userBean->getAllUser($bdd);
    foreach($tab as $value){
        echo $value->name_util."<br>";
    } 
    
?>