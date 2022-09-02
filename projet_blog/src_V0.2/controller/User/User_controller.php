<?php
require "./utils/connect_bdd.php";
require "./model/user/Manager_user.php";
require './vue/add_user.php';

class UserController
{
    

    public function addUser()
    {
        # Déclaration d'un tableau vide pour afficher certaine valeur ou non
        $entry = [];

        $bdd = BDD::getBDD();

        # On à définis un name="submit" sur notre input type button pour verifier si il existe dans la super globale $_POST
        if (isset($_POST['submit'])) {

            # Ici on verifie si touts nos champ sont remplis
            if (!empty($_POST['name_util']) && !empty($_POST['first_name_util']) && !empty($_POST['mail_util']) && !empty($_POST['mdp_util'])) {

                # Instanciation d'un nouvel utilisateur, définis img_util vide car on à pas encore le chemin
                $new_user = new Manager_user($_POST['name_util'], $_POST['first_name_util'], $_POST['mail_util'], $_POST['mdp_util'], "");

                # Ici on verifie que le mail n'existe pas dans la BDD
                if (!$new_user->verify_mail_exist($bdd)) {
                    # Verif de l'existance d'un fichiers (upload ou pas par l'utilisateur)
                    if (!empty($_FILES['img_util']['name'])) {

                        foreach ($_FILES['img_util'] as $key => $value) {
                            echo $key . " : " . $value . "<br/>";
                        }

                        $temp_name = $_FILES["img_util"]["tmp_name"];

                        $name = $_FILES["img_util"]["name"];

                        $size = $_FILES["img_util"]["size"];

                        $error = $_FILES["img_util"]["error"];

                        $path = "$name";
                        move_uploaded_file($temp_name,  "./dist/img/$path");
                    } else {
                        $path = "default.jpg";
                        $entry_value = '<p  class="text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-red-600 relative inline-block " > <span class="relative text-white " >Image de profile par défaut</span> </p> ';
                        array_push($entry, $entry_value);
                    }
                    $new_user->set_img_util($path);
                    $new_user->add_user($bdd);

                    $entry_value = '<p  class=" text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-green-600 relative inline-block" > <span class="relative text-white ">Inscription validé</span><p>';
                    array_push($entry, $entry_value);
                } else {
                    $entry_value = '<p  class="text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-red-600 relative inline-block " > <span class="relative text-white " >Désoler le mail est déjà utilisé <a href="#" class="text-gray-600"> Oublie ? </a></span> </p> ';
                    array_push($entry, $entry_value);
                }
            } else {
                $entry_value = '<p  class="text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-red-600 relative inline-block " > <span class="relative text-white " >Désoler une erreur est survenue   </span> </p> ';
                array_push($entry, $entry_value);
            }
        }
        // Affichage des information pour l'utilisateur si il y en a 
        foreach ($entry as $key => $value) {
            echo "$value";
        }
    }
}
