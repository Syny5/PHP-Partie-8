<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On crée quelques variables de session dans $_SESSION
$_SESSION['login'] = $_POST['login'];
$_SESSION['password'] = $_POST['password'];
setcookie('id', $_POST['login'] . ' ' . $_POST['password'], time() + 365*24*3600, null, null, false, true); // On écrit un cookie pour le pseudo
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 3</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 8 - Exercice 3</h1>
                <p class="lead">Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. 
                À la validation du formulaire, stocker les informations dans un cookie.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <form action="index.php" method="POST" class="form-group">
                <p><label>Login : <input class="form-control" type="text" name="login"></label></p>
                <p><label>Mot de passe : <input class="form-control" type="password" name="password"></label></p>
                <p><button type="submit" class="btn btn-success font-weight-bold">Valider</button></p>
            </form>
            <p><?= 'Pseudo : ' . $_SESSION['login'] ?></p>
            <p><?= 'Mot de passe : ' . $_SESSION['password'] ?></p>
            <p><?= 'Cookie du pseudo : ' . $_COOKIE['id'] ?></p>
          </main>
          <!-- footer -->
          <footer>

          </footer>
      </div>
      <!-- scripts JQuery, Popper, Angular et Bootstrap-->
      <script src="assets/js/jquery-3.4.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- mon script principal -->
      <script src="assets/js/main.js"></script>
  </body>
</html>
