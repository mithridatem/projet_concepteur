<?php
//if(isset($_POST['submit_util'])){
//    echo $_POST['name_art'];
//    echo $_POST['content_art'];
//    echo $_POST['date_art'];
//}
//?>

<?php
$date = date("Y-m-d");
include '../view/viewAddArticle.php';
//test si submit à été cliqué
if(isset($_POST['bt'])){
    //test si les champs sont remplis
    if(!empty($_POST['name_art']) AND !empty($_POST['content_art']) ){
        //test si date vide
        if(empty($_POST['date_art'])){
            $date_art = $date;
            echo "article : ".$_POST['name_art']. " date : " .$date_art;
        }
        //si l'utilisateur à choisi une date
        else{
            $date_art = $_POST['date_art'];
            echo "article : ".$_POST['name_art']. " date : " .$date_art;
        }
    }
    //test si les champs ne sont pas remplis
    else{
        echo "veuillez remplir tous les champs de formulaire";
    }
}
//si le bouton Envoyer n'est pas cliqué
else{
    echo "veuillez compléter le formulaire";
}
?>