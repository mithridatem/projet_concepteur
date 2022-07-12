<?php
  // Création du DSN
  $dsn = 'mysql:host=localhost;dbname=blog;port=3306;charset=utf8';
  
  // Création et test de la connexion
  
  try {
      $pdo = new PDO($dsn,'root','');
  }
  catch (PDOException $exception) {
      exit('Erreur de connexion à la base de données');
  } 
?>