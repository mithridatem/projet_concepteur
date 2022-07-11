Sujet :  
Notre entreprise Adrar souhaite créer un site web (blog) pour communiquer sur nos actions,  
événements etc …  
Le site devra être utilisable sur ordinateur et sur mobile.  
Nous souhaitons avoir un système d’authentification (admin publie les articles), et que les utilisateurs (connectés) puissent poster des commentaires.  
L’admin devra pouvoir supprimer des commentaires, bannir et dé bannir des comptes utilisateurs.  
Les visiteurs devront pouvoir consulter les articles et les commentaires.  


Le code ce trouve dans la partie source  

La stack : 
PHP 7.4 
Mysql 
Apache 
Tailwinds

Pour executer ce code il faudra dans l'ordre. 
cloner le folder dans votre www  
Créer la base de donner à l'aide du fichier sql ce trouvant dans le dossier conception  
Il faudra remettre en place dans le dossier utils un pdo avec le code suivant  

```php
<?php

#Instanciation de l'objet PDO pour pouvoir ce connecter à la bdd

$bdd = new PDO('mysql:host=localhost;dbname=devblog', 'root', '', #Votre mot de passe ici 
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


?>
```
Ouvrir un terminal dans le dossier src  
faire un npm install 
et normalement c'est tout 

Pour le modifier il faudra lancer le watcher

npx tailwindcss -i ./input.css -o ./dist/output.css --watch

Pour mieux comprendre le code rendez-vous sur la documentation de tailwindcss