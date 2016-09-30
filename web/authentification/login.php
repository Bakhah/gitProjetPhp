
<?php
include __DIR__.'/../partial/header.php';
include __DIR__.'/startSession.php';

?>
<!--<div class="container">
  <form method="post" action="login_process.php">
  <div class="page-header"><h1>Se connecter : </h1></div>
  <label for="basic-url">Nom d'utilisateur</label>
 <div class="input-group">
   <span class="input-group-addon" id="basic-addon1">@</span>
   <input type="text" class="form-control" name="Username" aria-describedby="basic-addon1">
 </div>
 <br>
 <label for="basic-url">Mot de passe</label>
 <div class="input-group">
   <span class="input-group-addon" id="basic-addon1">PW</span>
   <input type="text" class="form-control" name="Password" aria-describedby="basic-addon1">
 </div>
 <br>
 <p><a class="btn btn-primary btn-lg" type="submit" value="login" href="#" role="button">Se connecter</a>
 <a class="btn btn-primary btn-lg" href="#" role="button">Créer un compte</a></p>
 </form>
</div> -->

<form method="post" action="login_process.php">
    <label>Username:</label>
    <input type="text" name="Username" />
    <br>

    <label>Password:</label>
    <input type="Password" name="Password" />
    <br>

    <label>Remember me?:</label>
    <input type="checkbox" name="auto" />
    <br>

    <input type="submit" value="login" />
  </form>

<?php
include __DIR__.'/../partial/footer.php';
?>
