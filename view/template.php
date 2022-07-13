<!DOCTYPE html>
<html>
    <head>
        <title>Ajouter Article</title>
        <link href="./css/nav.css" rel="stylesheet" type="text/css">
        <link href="./css/base.css" rel="stylesheet" type="text/css">
        <link href="./css/<?=$css?>" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php if(isset($nav)){
            $menu = '<nav>
            <a href="/projet/">
                Tous les articles
            </a>';
            if(isset($_SESSION['user']))
                $menu = $menu.'
                <a href="/projet/add_article">
                    Ajouter un article
                </a>
                <a href="/projet/add_type">
                    Ajouter un type d\'article
                </a>
                <a href="/projet/add_user">
                    Ajouter un utilisateur
                </a>
                <a href="/projet/delete_user">
                    Supprimer un utilisateur
                </a>
                <a href="/projet/disconnect">
                    Se déconnecter
                </a>';
            else
                $menu = $menu.'<a href="/projet/connect">
                    Se connecter
                </a>';
            $menu = $menu.'</nav>';
            echo $menu;
        }
        ?>
        <?=$content?>
    </body>
</html>