<?php
require "./utils/connect_bdd.php";
require "./model/user/Manager_user.php";
require './model/comment/Comment.php';
require './model/comment/Manager_comment.php';
require './controller/Utils/Utils_controller.php';
#Flag on baisse le drapeau si une condition n'est pas remplis ainsi ils passe des les else
class User_controller
{
    private $bdd;
    public function __construct()
    {
        $this->bdd = BDD::getBDD();
    }
    public function addUser()
    {
        # Déclaration d'un tableau vide pour afficher certaine valeur ou non
        $entry = [];

        $content_title = "Crée mon";
        $title = "compte";
        $flag = true;

        # On à définis un name="submit" sur notre input type button pour verifier si il existe dans la super globale $_POST
        if (isset($_POST['submit'])) {
            $flag = false;
        }

        # Ici on verifie si touts nos champ sont remplis
        if (!$flag && !empty($_POST['name_util']) && !empty($_POST['first_name_util']) && !empty($_POST['mail_util']) && !empty($_POST['mdp_util'])) {
            # Instanciation d'un nouvel utilisateur, définis img_util vide car on à pas encore le chemin
            $new_user = new Manager_user(htmlspecialchars($_POST['name_util']), htmlspecialchars($_POST['first_name_util']), htmlspecialchars($_POST['mail_util']), $_POST['mdp_util'], htmlspecialchars(""));
        } else {
            $entry_value = '<p  class="text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-red-600 relative inline-block " > <span class="relative text-white " >Désoler une erreur est survenue   </span> </p> ';
            array_push($entry, $entry_value);
            $flag = true;
        }

        # Ici on verifie que le mail n'existe pas dans la BDD
        if (!$flag && !$new_user->verify_mail_exist($this->bdd)) {
            # Verif de l'existance d'un fichiers (upload ou pas par l'utilisateur)
            $path = Utils_controller::check_image("img_util");

            if ($path === "") {
                $path = "default.jpg";
                $entry_value = '<p  class="text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-red-600 relative inline-block " > <span class="relative text-white " >Image de profile par défaut</span> </p> ';
                array_push($entry, $entry_value);
            }

            $new_user->set_img_util($path);
            $new_user->add_user($this->bdd);

            $entry_value = '<p  class=" text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-green-600 relative inline-block" > <span class="relative text-white ">Inscription validé</span><p>';
            array_push($entry, $entry_value);
        } else {
            $entry_value = '<p  class="text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-red-600 relative inline-block " > <span class="relative text-white " >Désoler le mail est déjà utilisé <a href="#" class="text-gray-600"> Oublie ? </a></span> </p> ';
            array_push($entry, $entry_value);
        }

        require './vue/User/add_user.php';
    }
    public function add_comment()
    {
        $content_title = "Ajouter un";
        $title = "Commentaire";
        $entry = [];
        $secret_key = "6Ld-PPohAAAAAOvXAyCMz-efehnN-dwsNJMDCtdD";
        if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            // Verify the reCAPTCHA API response 
            $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response']);

            // Decode JSON data of API response 
            $response_data = json_decode($verify_response);
            // If the reCAPTCHA API response is valid 
            if ($response_data->success) {
                if (isset($_POST["commentaire"]) && isset($_SESSION['connected']) && isset($_GET['id'])) {
                    $new_comment = new Manager_comment(htmlspecialchars($_GET["id"]), $_SESSION['id'], htmlspecialchars($_POST["commentaire"]), null);
                    $new_comment->add_comment($this->bdd);
                    if (isset($_SESSION["temp_page"])) {
                        header('location: ' . $_SESSION["temp_page"]);
                    }
                }
            }
        }else{
            $entry_value = '<p  class=" text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-red-600 relative inline-block" > <span class="relative text-white ">Merci de cocher la case anti robot</span><p>';
            array_push($entry, $entry_value);
        }

        include './vue/User/add_comment.php';

    }
    public function connexion()
    {
        $content_title = "Interface de ";
        $title = "Connexion";
        $error = "";
        $flag = true;

        #Verification que l'utilisateur à bien appuyer sur le boutton
        if (isset($_SESSION["temp_page"])) {
            $go_back_link = $_SESSION["temp_page"];
        } else {
            $go_back_link = "";
        }
        if (isset($_GET['error']) && $_GET['error'] === '1') {
            $error = 'vous êtes connecter <br/>';
        }

        if (isset($_GET['error'])  && $_GET['error'] === '2') {
            $error = 'Erreur mail ou mot de passe<br/>';
        }


        if (isset($_POST['submit'])) {
            $flag = false;
        }

        if (!$flag && !empty($_POST['mail_util'] and !empty($_POST['mdp_util']))) {
            $util = new Manager_user("", "", $_POST['mail_util'], $_POST['mdp_util'], "");
        } else if (!isset($_GET['error'])) {
            header('location: connexion?error=2');
            $flag = true;
        }

        #Verification que le mail exist en base de données
        if (!$flag && !empty($util->verify_mail_exist($this->bdd))) {
            $user = $util->verify_user($this->bdd);
            $hash = $user->mdp_util;
        } else if (!$flag) {
            header('location: connexion?error=2');
        }
        if (!$flag && password_verify($_POST['mdp_util'], $hash)) {
            $_SESSION['id'] = $user->id_util;
            $_SESSION['name'] = $user->name_util;
            $_SESSION['connected'] = true;
            $_SESSION['role'] = $user->id_role;
            if (isset($_SESSION["temp_page"])) {
                header('location: ' . $_SESSION["temp_page"]);
            } else {
                header('location: connexion?error=1');
            }
        } else if (!$flag) {
            header('location: connexion?error=2');
        }

        include './vue/User/view_connexion.php';
    }
    public function deconnexion()
    {
        session_destroy();
        unset($_COOKIE['PHPSESSID']);
        header('location: /');
    }

    public function profil_user()
    {
        $content_title = "Profil ";
        $title = "Connexion";

        include './vue/User/view_profil.php';
    }
}
