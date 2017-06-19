<?php
session_start();
?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8" lang="fr">
     <link rel="stylesheet" href="/bootstrap.css">
     <link rel="stylesheet" href="/style.css">
     <title>Login & PWD</title>
   </head>
   <body>

     <p>Re-bonjour !</p>

     <p>
      Votre login est <?= $_COOKIE['log']; ?> !<br />
      Votre passeword est <?= $_COOKIE['mdp']; ?>

    </p>

    <p>
      Pour revenir à la page d'accueil :
      <a href="index.php">CLICK THIS !!!</a>
    </p>
   </body>
 </html>
