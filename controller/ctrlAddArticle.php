
<?php
include './view/viewAddArticle.php';

if(isset($_POST['submit'])){

  // echo'<pre>';
  // var_dump($_POST);
  // echo'<pre>';

    // test si les champs sont remplis
    if(!empty($_POST['name_art']) AND !empty($_POST['content_art']) ){
      if(empty($_POST['date_art'])){
        $_POST['date_art'] = date("Y-m-d");
      }
        echo "l'article suivant à été ajouté : ".$_POST['name_art']. " ". $_POST['content_art'];
    }
    else{
        echo "veuillez remplir tous les champs de formulaire";
    } 
}
else{
    echo "veuillez compléter le formulaire";
}
?>