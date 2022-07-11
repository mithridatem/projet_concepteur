<?php
//if(isset($_POST['submit_util'])){
//    echo $_POST['first_name_util'];
//    echo $_POST['name_util'];
//    echo $_POST['mail_util'];
//    echo $_POST['pwd_util'];
//    echo "l\utilisateur a été ajouté:"echo $_POST['name_util'];
//}
//?>

<?php
//imports
include '../view/viewAddUser.php';
include '../utils/connectBdd.php';
include '../model/utilisateur.php';

//test vérifier le contenu des inputs
//test si submit à été cliqué
if(isset($_POST['bt'])){
    //test si les champs sont remplis
    if(!empty($_POST['name_util']) AND !empty($_POST['first_name_util']) AND
        !empty($_POST['mail_util']) AND !empty($_POST['mdp_util'])){
        if(isset($_FILES['file'])){
            //stocke le chemin et le nom temporaire du fichier importé (ex /tmp/125423.pdf)
            $tmpName = $_FILES['file']['tmp_name'];
            //stocke le nom du fichier (nom du fichier et son extension importé ex : test.jpg)
            $name = $_FILES['file']['name'];
            //stocke la taille du fichier en octets
            $size = $_FILES['file']['size'];
            //stocke les erreurs (pb d'import, pb de droits etc…)
            $error = $_FILES['file']['error'];
            //stocker le chemin de l'image
            $file = "../asset/images/$name";
            //déplacer le fichier importé dans le dossier image à la racine du projet
            $fichier = move_uploaded_file($tmpName, $file);

        }
        else{
            $file = "../asset/images/defaut.jpg";
        }
        addUser($bdd,$file);

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
