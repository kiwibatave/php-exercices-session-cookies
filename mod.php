<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
if (isset($_POST['log'])) {
setcookie('log', $_POST["log"], time() + 365*24*3600, null, null, false, true);
setcookie('mdp', $_POST["mdp"], time() + 365*24*3600, null, null, false, true);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="style.css" rel="stylesheet">
  <title>Mod login & password</title>
</head>

<body>
<form action="index.php" method="post">
  <input placeholder="Pseudo" name="log" value="">
  <input placeholder="Mot de passe" name="mdp" value="">
  <input type="submit" value="Envoyer" />
</form>
</body>
</html>
