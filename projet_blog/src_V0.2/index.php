<?php

  session_start();

# Analyse de l'url avec parse_url et retourne ses composants

$url = parse_url($_SERVER['REQUEST_URI']);


# Test soit l'url a une route sinon on renvoi à la racine

$uri_path = isset($url['path']) ? $url['path'] : '/';



/****************************/

switch ($uri_path ) {
  case $uri_path  === "/Blog/src_V0.2/addArticle":
    include './controller/ctrl_add_article.php';
    break;
  case $uri_path  === "/Blog/src_V0.2/addUser":
    include './controller/ctrl_add_user.php';
    break;
  case $uri_path === "/Blog/src_V0.2/connexion";
  include './controller/ctrl_connexion.php';
  break;
  default:
    include './vue/template.php';
    break;
}