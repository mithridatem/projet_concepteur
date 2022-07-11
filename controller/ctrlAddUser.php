
<?php
include '../view/viewAddUser.php';

if(isset($_POST)){

  echo'<pre>';
  var_dump($_POST);
  echo'<pre>';

    // test si les champs sont remplis
    if(!empty($_POST['name_util']) AND !empty($_POST['first_name_util']) AND 
    !empty($_POST['mail_util']) AND !empty($_POST['mdp_util'])){
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