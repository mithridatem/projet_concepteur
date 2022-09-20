<?php

session_start();

# Analyse de l'url avec parse_url et retourne ses composants

$url = parse_url($_SERVER['REQUEST_URI']);
# Test soit l'url a une route sinon on renvoi à la racine

$uri_path = isset($url['path']) ? $url['path'] : '/';
$LOGIN_MANDATORY_URL = [
  "/disconnect",
  "/add_article",
];
$base = "/";


/****************************/
try {
  if (!isset($_SESSION['user']) && in_array($uri_path, $LOGIN_MANDATORY_URL)) $uri_path = '/projet/connect';
  switch ($uri_path) {
    case $uri_path  === $base:
      require './controller/ctrl_show_home.php';
      break;
    case $uri_path  === $base . "addArticle":
      require './controller/Article/Article_controller.php';
      $article = new ArticleController();
      $article->addArticle();
      break;
    case $uri_path  === $base . "articles":
      require './controller/Article/Article_controller.php';
      $article = new ArticleController();
      $article->show_all_articles();
      break;
    case $uri_path  === $base . "article":
      require './controller/Article/Article_controller.php';
      $article = new ArticleController();
      $article->show_article();
      break;
    case $uri_path  === $base . "addComment":
      require "./controller/User/User_controller.php";
      $user = new UserController;
      $user->add_comment();
      break;
    case $uri_path  === $base . "addUser":
      require "./controller/User/User_controller.php";
      $user = new UserController;
      $user->addUser();
      break;
    case $uri_path === $base . "connexion";
      require "./controller/User/User_controller.php";
      $user = new UserController;
      $user->connexion();
      break;
    case $uri_path === $base . "deconnexion";
      require "./controller/User/User_controller.php";
      $user = new UserController;
      $user->deconnexion();
      break;
    case $uri_path === $base . "profil";
      require "./controller/User/User_controller.php";
      $user = new UserController;
      $user->profil_user();
      break;
    default:
      require './controller/ctrl_404.php';

      break;
  }
  // require './vue/template.php';
} catch (Exception $ex) {
  require './controller/ctrl_404.php';
  var_dump($uri_path, $ex);
}
