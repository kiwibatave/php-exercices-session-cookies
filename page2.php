<?php
session_start();
?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8" lang="fr">
     <link rel="stylesheet" href="/bootstrap.css">
     <link rel="stylesheet" href="/style.css">
     <title>Page de vérification</title>
   </head>
   <body>

     <p>Re-bonjour !</p>

     <p>
      Je me souviens de toi ! Tu t'appelles <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !<br />
      Et ton âge… Tu as <?php echo $_SESSION['age']; ?> ans, c'est ça ? :-D
    </p>

    <p>
      Pour revenir à la page d'accueil :
      <a href="index.php">CLICK THIS !!!</a>
    </p>
   </body>
 </html>
