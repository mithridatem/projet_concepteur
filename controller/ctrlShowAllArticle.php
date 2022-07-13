<?php

if( !isset($_SESSION) || !isset($_SESSION['connected']) || !$_SESSION['connected'] ){
  header('location:/projet_concepteur/connection');
}

include './view/viewAllArticle.php';


?>