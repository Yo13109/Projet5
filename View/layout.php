<!doctype html>
<html lang="fr">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


  <title>Mon Blog</title>

  <link rel="stylesheet" href="<?= $config->basepath; ?>/View/layout.css">
  <?php
  global $controller;
  echo $controller->fileManager->generateJs();
  echo $controller->fileManager->generateCss();
  ?>
  <script src="https://kit.fontawesome.com/0b30b9386d.js" crossorigin="anonymous"></script>

</head>


<body>
  <div class="barre ">
    <nav class="navbar navbar-dark  navbar-expand-md">
      <a class="navbar-brand" href="#">
        <img src="<?= $config->basepath; ?>/Image/logo.jpg" width="60" height="60" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-la bel="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="http://localhost/projet5/">Accueil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/projet5/MesPost">Mes Posts</a>
          </li>



        </ul>
      </div>
    </nav>
  </div>
  <?= $content; ?>

  <div class="pied">
    <div class="container">

      <div class="row">
        <div class="col-6 col-md-2 col-lg-2">
          <a href="https://twitter.com/home"> <img src="<?= $config->basepath; ?>/Image/twitter.png" width="60" height="60" alt=""> Twitter</a>
        </div>

        <div class="col-6 col-md-2 col-lg-2"><a href="https://www.facebook.com/yoann.corsi"> <img src="<?= $config->basepath; ?>/Image/facebook.png" width="60" height="60" alt=""> Facebook</a>

        </div>
        <div class="col-6 col-md-2 col-lg-2"><a href="https://www.linkedin.com/feed/"> <img src="<?= $config->basepath; ?>/Image/linkedin.png" width="60" height="60" alt=""> Linkedin</a></div>
        <div class="col-2col-6 col-md-2 col-lg-2"><a href="https://www.instagram.com/"><img src="<?= $config->basepath; ?>/Image/instagram.jpg" width="60" height="60" alt=""> Instagram</a></div>
      </div>
    </div>
  </div>

</body>

</html>