<?php
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    /*--------------------------ROUTER -----------------------------*/
    //test de la valeur $path dans l'URL et import de la ressource
    switch($path){

    case $path === "/projet_concepteur/":
      echo 'Hi';
      break;
    
    case $path === "/projet_concepteur/addArticle" :
      include './controller/ctrlAddArticle.php';
      break ;
    
    case $path === "/projet_concepteur/addUser":
      include './controller/ctrlAddUser.php';
      break ;

    case $path === "/projet_concepteur/allArticle":
      include './controller/ctrlShowAllArticle.php';
      break ;

    case $path === "/projet_concepteur/viewArticles":
      include './controller/ctrlViewArticle.php';
      break ;
    
    case $path !=='';
      include './404.php';
      break;
    
    default:
      include './404.php';
      break;
}

?>