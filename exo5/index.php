<?php
    setcookie('id', $_POST['login'] . ' ' . $_POST['password'], time() + 365*24*3600, null, null, false, true); // On écrit un cookie pour le pseudo
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 5</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 8 - Exercice 5</h1>
                <p class="lead">Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <form action="index.php" method="POST" class="form-group">
                <p><label>Login : <input class="form-control" type="text" name="login"></label></p>
                <p><label>Mot de passe : <input class="form-control" type="password" name="password"></label></p>
                <p><button type="submit" class="btn btn-success font-weight-bold">Valider</button></p>
                <p><a href="cookies.php">Voir les cookies</a></p>
            </form>
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
