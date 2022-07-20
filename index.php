<?php
session_start();
$url = parse_url($_SERVER['REQUEST_URI']);
//test soit l'url a une route sinon on renvoi à la racine
$path = isset($url['path']) ? $url['path'] : '/';
$LOGIN_MANDATORY_URL = [
    "/projet/disconnect",
    "/projet/add_article",
    "/projet/add_type",
    "/projet/delete_user",

];
if(!isset($_SESSION['user']) && in_array($path, $LOGIN_MANDATORY_URL))$path = '/projet/connect';
switch($path){
    case $path === "/projet/see_article":
        include './controller/add_comment.php';
       break ;
    case $path === "/projet/connect":
        include './controller/connect.php';
       break ;
    case $path === "/projet/disconnect":
    include './controller/disconnect.php';
    break ;
    case $path === "/projet/add_user":
    include './controller/add_user.php';
   break ;
   case $path === "/projet/":
    include './view/all_article.php';
   break ;
   case $path === "/projet/add_article":
    include './controller/add_article.php';
   break ;
   case $path === "/projet/add_type":
    include './controller/add_type.php';
   break ;
   case $path === "/projet/delete_user":
    include './controller/delete_user.php';
   break ;
   default:
    echo"Il n'y a rien ici";
}
?>