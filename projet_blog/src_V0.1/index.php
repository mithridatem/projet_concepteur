<?php

//Analyse de l'url avec parse_url et retourne ses composants

$url = parse_url($_SERVER['REQUEST_URI']);

foreach ($url as $key => $value) {
  echo $value;
}

//test soit l'url a une route sinon on renvoi à la racine

$path = isset($url['path']) ? $url['path'] : '/';

echo $path;

/****************************/

switch ($path) {
  case $path === "/Blog/src_V0.1/addArticle":
    include './controller/ctrl_add_article.php';
    break;
  case $path === "/Blog/src_V0.1/addUser":
    include './controller/ctrl_add_user.php';
    break;
  default:
    include './vue/template.php';
    break;
}
