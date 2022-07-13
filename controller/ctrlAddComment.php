<?php
  include './model/comment.php';
  include './manager/ManageComment.php';
  include './utils/connectBdd.php';

  if( !isset($_SESSION) || !isset($_SESSION['connected']) || !$_SESSION['connected'] ){
    header('location:/projet_concepteur/connection');
  }

  if( !isset($_GET['id']) ){
    echo 'Provide Id';
  }else{
    if(isset($_POST['submit'])){
  
      if(!empty($_POST['comment'])){
        $id_util = $_SESSION['id'];
        $id_art = $_GET['id'];
        $comment = $_POST['comment'];

        $comment = new ManagerComment($id_art,$id_util,$comment);
        $comment->addCommment($bdd);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
      }
      else{
          echo "Enter comment";
      } 
    }else{
      echo 'wut';
    }
  }
  
?>