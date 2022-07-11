<html lang="fr">
<head>
 <meta charset="UTF-8">
 <title>formulaire</title>
</head>
<body>
 <form action="resultat.php" method="get">
 <p>veuillez saisir votre nom :</p>
 <input type="text" name="nom">
 <br>
 <input type="submit" value="Envoyer">
 </form>
</body>
</html>

<?php
if (isset($_GET['nom'])){
    echo $_GET['nom']
}


  ?>