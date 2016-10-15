<?php include __DIR__.'/../authentification/startSession.php'; ?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.php">My Kitchen</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li class="active"><a href="/../index.php">Accueil<span class="sr-only">(current)</span></a></li>
        <?php
        if ($_SESSION['userData']['data']['ID'] == 0) { // A réécrire proprement

        }
        else
        {
          echo '<li><a href="../calendar/show.php">Calendrier</a></li>';
          echo '<li><a href="../converter/show.php">Convertisseur</a></li>';
        }?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
        if ($_SESSION['userData']['data']['ID'] == 0) { // A réécrire proprement
          echo '<li><a href="../authentification/login.php">Connexion</a></li>';
          echo '<li><a href="../authentification/register.php">Créer un compte</a></li>';
        }
        else
        {
          echo '<li class="active"><a class="navbar-brand" href="#">'.$_SESSION['userData']['data']['Username'].'</a></li>';
          echo '<li><a href="../authentification/logout_process.php">Se déconnecter</a></li>';

        }?>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
