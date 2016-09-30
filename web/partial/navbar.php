<?php include __DIR__.'/../authentification/startSession.php'; ?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="#">My Kitchen</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li class="active"><a href="#">Accueil<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Mes recettes</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
        if (!isset($_SESSION)) # A réécrire proprement
        {
          echo '<li><a href="../authentification/login.php">Connexion</a></li>';
        }
        else
        {
          echo '<li><a class="navbar-brand" href="#">'.$_SESSION['userData']['data']['Username'].'</a></li>';
          echo '<li><a href="#">Déconnexion</a></li>';
        }?>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
