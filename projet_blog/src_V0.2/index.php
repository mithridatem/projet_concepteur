<?php

session_start();

# Analyse de l'url avec parse_url et retourne ses composants


# Test soit l'url a une route sinon on renvoi à la racine


$LOGIN_MANDATORY_URL = [
  "/disconnect",
  "/addArticle",
  "/admin",
  "/admin-articles",
];


var_dump( empty($request_uri[1]));
/****************************/
try {
  if(!isset($_GET["page"] )) $_GET["page"] = "/";
  $request_uri = explode('/', $_GET["page"]);
var_dump($request_uri, $_GET["page"]);

  if (!isset($_SESSION['connected']) && in_array($uri_path, $LOGIN_MANDATORY_URL)) $request_uri[0] = '/connexion';

  switch ($request_uri[0]) {
    case "/":
      require './controller/ctrl_show_home.php';
      break;
    case  "addArticle":
      require './controller/Article/Article_controller.php';
      $article = new Article_controller();
      $article->addArticle();
      break;
    case   "articles":
      require './controller/Article/Article_controller.php';
      $article = new Article_controller();
      $article->show_all_articles();
      break;
    case   "article":
      require './controller/Article/Article_controller.php';
      $article = new Article_controller();
      $article->show_article();
      break;
    case   "addComment":
      require "./controller/User/User_controller.php";
      $user = new User_controller;
      $user->add_comment();
      break;
    case   "addUser":
      require "./controller/User/User_controller.php";
      $user = new User_controller;
      $user->addUser();
      break;
    case   "connexion";
      require "./controller/User/User_controller.php";
      $user = new User_controller;
      $user->connexion();
      break;
    case   "deconnexion";
      require "./controller/User/User_controller.php";
      $user = new User_controller;
      $user->deconnexion();
      break;
    case   "profil";
      require "./controller/User/User_controller.php";
      $user = new User_controller;
      $user->profil_user();
      break;
    case   "admin";
    
      if(empty($request_uri[1])){
        require "./controller/Admin/admin_home_controller.php";
        $admin = new Admin_home_controller;
        $admin->show_home_admin();
      }else if ($request_uri[1] === "articles"){
        require "./controller/Admin/Master_article_controller.php";
        $admin = new Master_article_controller;
        $admin->show_master_article();
      }
      break;
    default:
      // require './controller/ctrl_404.php';
      throw new Exception("Erreur exceptionelle");
      break;
  }
  //require './vue/template.php';
} catch (Exception $ex) {
  echo $ex->getMessage();
  echo $ex->xdebug_message;
  var_dump($ex);
}
