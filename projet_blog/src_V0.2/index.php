<?php

session_start();

# Analyse de l'url avec parse_url et retourne ses composants

$url = parse_url($_SERVER['REQUEST_URI']);


# Test soit l'url a une route sinon on renvoi à la racine

$uri_path = isset($url['path']) ? $url['path'] : '/';



/****************************/

switch ($uri_path) {
  case $uri_path  === "/Blog/src_V0.2/":
    ob_start();
    include './controller/ctrl_show_home.php';
    $content = ob_get_clean();
    break;
  case $uri_path  === "/Blog/src_V0.2/addArticle":
    ob_start();
    include './controller/ctrl_add_article.php';
    $content = ob_get_clean();
    break;
  case $uri_path  === "/Blog/src_V0.2/articles":
    ob_start();
    include './controller/ctrl_show_all_articles.php';
    $content = ob_get_clean();
    break;
  case $uri_path  === "/Blog/src_V0.2/article":
    ob_start();
    include './controller/ctrl_show_article.php';
    $content = ob_get_clean();
    break;
  case $uri_path  === "/Blog/src_V0.2/addComment":
    ob_start();
    include './controller/ctrl_add_comment.php';
    $content = ob_get_clean();
    break;
  case $uri_path  === "/Blog/src_V0.2/addUser":
    ob_start();
    include './controller/ctrl_add_user.php';
    $content = ob_get_clean();
    break;
  case $uri_path === "/Blog/src_V0.2/connexion";
    ob_start();
    include './controller/ctrl_connexion.php';
    $content = ob_get_clean();
    break;
  case $uri_path === "/Blog/src_V0.2/deconnexion";
    ob_start();
    include './controller/ctrl_deconnexion.php';
    $content = ob_get_clean();
    break;
  default:
    $content = "";
    include './vue/template.php'; //A FAIRE 404 ERROR
    break;
}
include './vue/template.php';