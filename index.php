<?php
$url = parse_url($_SERVER['REQUEST_URI']);
//test soit l'url a une route sinon on renvoi à la racine
$path = isset($url['path']) ? $url['path'] : '/';
switch($path){
    case $path === "/projet/add_user":
    include './controller/add_user.php';
   break ;
   case $path === "/projet/all_article":
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
   case $path === "/":
    include './menu.php';
   break ;
   default:
    echo"Il n'y a rien ici";
}
?>