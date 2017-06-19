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
// ISSET permet de "supprimer" les erreurs d'affichage des valeurs $_POST lorsque celles-ci sont nulles
if (isset($_POST["log"])) {

 setcookie('log', $_POST["log"], time() + 365*24*3600, null, null, false, true);
 setcookie('mdp', $_POST["mdp"], time() + 365*24*3600, null, null, false, true);
}
 ?>


<!-- On créé ensuite sa page HTML classique -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" lang="fr">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Exos-PHP-Session-Cookies</title>
  </head>
  <body>
  <header>
<p id="first">
  <span>IP :</span>
 <?=//  $_SERVER['REMOTE_ADDR'] permet d'afficher l'adresse IP du visiteur.
 $_SERVER['REMOTE_ADDR'];?> <br />
  <span>Navigateur :</span>
 <?= // $_SERVER['HTTP_USER_AGENT'] permet d'afficher le navigateur utilisé.
 $_SERVER['HTTP_USER_AGENT'];?> <br />
  <span>Nom du serveur :</span>
 <?= // $_SERVER ['SERVER_NAME'] permet d'afficher le nom du serveur.
 $_SERVER['SERVER_NAME'];?> <br />
</p>
  </header>
  <main>
    <p>
      Salut <?= $_SESSION['prenom']; ?> !<brif (isset($_COOKIE['pseudo'])) {
	echo 'Bonjour '.$_COOKIE['pseudo'].' !'; />
      Tu es sur la page d'acceuil de ce site de OUF!!!!!! <br />
      Si tu veux vérifier, ton prénom, ton nom et ton âge, clic sur le lien suivant : <br />
      <a href="page2.php">CLICK THIS !!!</a>
    </p>

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

     <a href="page3.php">Affiche ton login et ton passeword</a>
     <a href="mod.php">Modifier ton login et ton passeword</a>
  </body>
</html>
