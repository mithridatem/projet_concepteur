
<?php
include '../view/viewAddUser.php';#
include '../utils/connectBdd.php';

if(isset($_POST['submit'])){

  // echo'<pre>';
  // var_dump($_POST);
  // echo'<pre>';

    // test si les champs sont remplis
    if(!empty($_POST['name_util']) AND !empty($_POST['first_name_util']) AND 
    !empty($_POST['mail_util']) AND !empty($_POST['mdp_util'])){
        echo "l'utilisateur suivant à été ajouté : ".$_POST['name_util']. " ". $_POST['first_name_util'];
        addUser($bdd);
    }
    else{
        echo "veuillez remplir tous les champs de formulaire";
    } 
}
else{
    echo "veuillez compléter le formulaire";
}

function addUser($bdd){
  try{
      $req = $bdd->prepare("insert into utilisateur(name_util, first_name_util, mail_util, mdp_util) values
      (:name_util, :first_name_util, :mail_util, :mdp_util)");
      $req->execute(array(
          'name_util' => $_POST['name_util'],
          'first_name_util' => $_POST['first_name_util'],
          'mail_util' => $_POST['mail_util'],
          'mdp_util' => password_hash($_POST['mdp_util'], PASSWORD_DEFAULT),
      ));
  }
  catch(Exception $e)
  {
      //affichage d'une exception en cas d’erreur
      die('Erreur : '.$e->getMessage());
  }
}
?>