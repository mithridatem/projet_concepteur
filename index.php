<?php
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    /*--------------------------ROUTER -----------------------------*/
    //test de la valeur $path dans l'URL et import de la ressource
    switch($path){
    
    case $path === "/cda/addArticle" :
    include './controller/ctrlAddArticle.php';
    break ;
    
    case $path === "/cda/addUser":
    include './controller/ctrlAddUser.php';
    break ;

    case $path === "/cda/allArticle":
    include './controller/ctrlShowAllArticle.php';
    break ;
   
    case $path !=='';
    include './error.php';
    break;
    
    default:
    include './error.php';
    break;
}

?>