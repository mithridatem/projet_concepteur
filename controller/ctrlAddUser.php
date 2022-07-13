<?php
    //imports
    include './view/viewAddUser.php';
    include './utils/connectBdd.php';
    include './model/utilisateur.php';
    include './manager/utilisateur.php';
    $file = "./asset/images/defaut.jpg";
    //test vérifier le contenu des inputs
    //test si submit à été cliqué
    if(isset($_POST['bt'])){
        $util = new ManagerUtilisateur($_POST['name_util'], $_POST['first_name_util'], $_POST['mail_util'],
        $_POST['mdp_util'], "");
        //test si les champs sont remplis
        if(!empty($_POST['name_util']) AND !empty($_POST['first_name_util']) AND 
        !empty($_POST['mail_util']) AND !empty($_POST['mdp_util'])){
            if($_FILES['img_util']['name']!=""){
                //stocke le chemin et le nom temporaire du fichier importé (ex /tmp/125423.pdf)
                $tmpName = $_FILES['img_util']['tmp_name'];
                //stocke le nom du fichier (nom du fichier et son extension importé ex : test.jpg)
                $name = $_FILES['img_util']['name'];
                //stocke la taille du fichier en octets
                $size = $_FILES['img_util']['size'];
                //stocke les erreurs (pb d'import, pb de droits etc…)
                $error = $_FILES['img_util']['error'];
                //stocker le chemin de l'image 
                $file = "./asset/images/$name";
                //déplacer le fichier importé dans le dossier image à la racine du projet
                $fichier = move_uploaded_file($tmpName, $file);
                $util->set_img_util($file);
                //test si l'utilisateur n'existe pas
                if($util->getAllUserbyMail($bdd)){
                    $util->addUser($bdd);
                    //header('location: /addUser?name='.$_POST['name_util'].'&img=2');
                }
                
            }
            if($util->getAllUserbyMail($bdd)){
                $util->set_img_util($file);
                $util->addUser($bdd);
                //header('location: /addUser?name='.$_POST['name_util'].'&img=1');
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
    
?>