<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 1</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 8 - Exercice 1</h1>
                <p class="lead">Faire une page HTML permettant de donner à l'utilisateur :
                    <ul>
                        <li>Son User Agent</li>
                        <li>Son adresse ip</li>
                        <li>Le nom du serveur</li>
                    </ul>
                </p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <p><?= 'Votre User Agent : ' . $_SERVER['HTTP_USER_AGENT']; ?></p>
            <p><?= 'Votre adresse IP : ' . $_SERVER['REMOTE_ADDR']; ?></p>
            <p><?= 'Le nom de votre serveur : ' . $_SERVER['SERVER_NAME']; ?></p>
                <!-- Pour montrer toutes les commandes d'affichages server possibles :
                foreach($_SERVER as $index => $value){
                    echo $index.' : '.$value.'<br>';
                }  -->
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
