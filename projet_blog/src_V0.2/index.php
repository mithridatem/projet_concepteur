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
try{
if(!isset($_SESSION['user']) && in_array($uri_path, $LOGIN_MANDATORY_URL))$uri_path = '/projet/connect';
  switch ($uri_path) {
  case $uri_path  === $base:
      ob_start();
      include './controller/ctrl_show_home.php';
      $content = ob_get_clean();
      break;
    case $uri_path  === $base . "addArticle":
      ob_start();
      include './controller/ctrl_add_article.php';
      $content = ob_get_clean();
      break;
    case $uri_path  === $base . "articles":
      ob_start();
      include './controller/ctrl_show_all_articles.php';
      $content = ob_get_clean();
      break;
    case $uri_path  === $base . "article":
      ob_start();
      include './controller/ctrl_show_article.php';
      $content = ob_get_clean();
      break;
    case $uri_path  === $base . "addComment":
      ob_start();
      include './controller/ctrl_add_comment.php';
      $content = ob_get_clean();
      break;
    case $uri_path  === $base . "addUser":
      ob_start();
      include './controller/ctrl_add_user.php';
      $content = ob_get_clean();
      break;
    case $uri_path === $base . "connexion";
      ob_start();
      include './controller/ctrl_connexion.php';
      $content = ob_get_clean();
      break;
    case $uri_path === $base . "deconnexion";
      ob_start();
      include './controller/ctrl_deconnexion.php';
      $content = ob_get_clean();
      break;
    default:
      ob_start();
      include './controller/ctrl_404.php';
      $content = ob_get_clean();
      break;
  }
  include './vue/template.php';
}catch(Exception $ex){
  ob_start();
  include './controller/ctrl_404.php';
  $content = ob_get_clean();
}
