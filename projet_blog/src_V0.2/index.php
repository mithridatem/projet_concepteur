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
$base_admin = "/admin";

/****************************/
try {
  if (!isset($_SESSION['user']) && in_array($uri_path, $LOGIN_MANDATORY_URL)) $uri_path = '/projet/connect';
  switch ($uri_path) {
    case $uri_path  === $base:
      require './controller/ctrl_show_home.php';
      break;
    case $uri_path  === $base . "addArticle":
      require './controller/Article/Article_controller.php';
      $article = new Article_controller();
      $article->addArticle();
      break;
    case $uri_path  === $base . "articles":
      require './controller/Article/Article_controller.php';
      $article = new Article_controller();
      $article->show_all_articles();
      break;
    case $uri_path  === $base . "article":
      require './controller/Article/Article_controller.php';
      $article = new Article_controller();
      $article->show_article();
      break;
    case $uri_path  === $base . "addComment":
      require "./controller/User/User_controller.php";
      $user = new User_controller;
      $user->add_comment();
      break;
    case $uri_path  === $base . "addUser":
      require "./controller/User/User_controller.php";
      $user = new User_controller;
      $user->addUser();
      break;
    case $uri_path === $base . "connexion";
      require "./controller/User/User_controller.php";
      $user = new User_controller;
      $user->connexion();
      break;
    case $uri_path === $base . "deconnexion";
      require "./controller/User/User_controller.php";
      $user = new User_controller;
      $user->deconnexion();
      break;
    case $uri_path === $base . "profil";
      require "./controller/User/User_controller.php";
      $user = new User_controller;
      $user->profil_user();
      break;
    case $uri_path === $base_admin;
      require "./controller/Admin/admin_home_controller.php";
      $admin = new Admin_home_controller;
      $admin->show_home_admin();
      break;
    case $uri_path === $base_admin . "-article";
      require "./controller/Admin/Master_article_controller.php";
      $admin = new Master_article_controller;
      $admin->show_master_article();
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
