<?php
include './utils/connect_bdd.php';
include './model/Article.php';
include './model/Type.php';
include './manager/Manager_article.php';
include './manager/Manager_type.php';

$content_title = "Ajouter un";
$title = "Article";
$message = "";

if (!isset($_SESSION['connected'])) {
    header('location: connexion?error=intedit');
}

#Récuperation de la date 
#Verifier le contenus des input

if (isset($_POST['submit'])) {
    if (!empty($_POST['name_art']) && !empty($_POST['content_art'])) {
        if (empty($_POST['date_art'])) {
            $_POST['date_art'] = date("Y-m-d");
        }
        $new_article = new Manager_article($_POST['name_art'], $_POST['content_art'], $_POST['date_art'], 1);

        $new_article->set_id_type($_POST["id_type"]);

        $new_article->add_article($bdd);

        $message = display_error(true);
    } else {
        $message = display_error(false);
    }
}
function display_error($flag)
{
    ob_start();
    if ($flag) { ?>
        <p class="text-center text-green-600"> L'article est envoyer </p>
    <?php } else { ?>
        '<p class="text-center text-red-600"> Désoler une erreur est survenue </p>';
    <?php }
    return ob_get_clean();
}
/**
 * Gestion des entrées dans les option
 */
$type = new Manager_type();

ob_start();
$allTypes = $type->get_all_types($bdd);

foreach ($allTypes as $value) { ?>
    <option value="<?= $value->id_type?>" /> <?= $value->name_type ?> </option>
<?php }

$options = ob_get_clean();
/************************/

#VUE
include './vue/add_article.php';
