<?php
// On démarre la session AVANT d'écrire du code HTML. TOUJOURS !!!
session_start();

// On créé quelques variables de session.
$_SESSION['prenom'] = 'Ben';
$_SESSION['nom'] = 'Cuz';
$_SESSION['age'] = 32;
?>

 <?php

$temps = 365*24*3600;

 setcookie('log', $_POST["log"], time() + 365*24*3600, null, null, false, true);
 setcookie('mdp', $_POST["mdp"], time() + 365*24*3600, null, null, false, true);
 ?>
<!-- On créé ensuite sa page HTML classique -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" lang="fr">
    <link rel="stylesheet" href="/bootstap.css">
    <link rel="stylesheet" href="/style.css">
    <title>Exos-PHP-Session-Cookies</title>
  </head>
  <body>

  <?php
  //  $_SERVER['REMOTE_ADDR'] permet d'afficher l'adresse IP du visiteur
  $_SERVER['REMOTE_ADDR'];
  print_r($_SERVER);
    ?>
    <p>
      Salut <?= $_SESSION['prenom']; ?> !<br />
      Tu es sur la page d'acceuil de ce site de OUF!!!!!! <br />
      Si tu veux vérifier, ton prénom, ton nom et ton âge, clic sur le lien suivant : <br />
      <a href="page2.php">CLICK THIS !!!</a>

    </p>
     <div class="container">
       <form class="form-inline" method="post" action="index.php">
         <div class="form-group">
           <label class="sr-only" for="exampleInputEmail3">LOGIN</label>
           <input type="text" class="form-control" name="log" id="exampleInputEmail3" placeholder="Login">
         </div>
         <div class="form-group">
           <label class="sr-only" for="exampleInputPassword3">PWD</label>
           <input type="text" class="form-control" name="mdp" id="exampleInputPassword3" placeholder="Password">
         </div>
         <div class="checkbox">
           <label>
             <input type="checkbox"> Remember me
           </label>
         </div>
         <button type="submit" class="btn btn-default">Sign in</button>
       </form>
     </div>
     <a href="page3.php">Affiche ton login et ton passeword</a>
  </body>
</html>
