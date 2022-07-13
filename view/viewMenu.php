<?php
    if(isset($_SESSION['connected'])){
?>
    <nav>
        <ul>
            <li><a href="addArticle">Ajouter un article</a></li>
            <li><a href="allArticle">liste des articles</a></li>
            <li><a href="deco">Déconnexion</a></li>
        </ul>
    </nav>
<?php
}
else{
?>
    <nav>
        <ul>
            <li><a href="connexion">Connexion</a></li>
            <li><a href="addUser">Ajouter un compte</a></li>
            <li><a href="allArticle">liste des articles</a></li>
        </ul>
    </nav>
<?php
}
?>