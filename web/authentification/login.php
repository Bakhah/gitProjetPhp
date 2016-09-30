
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


</div>
<div class="row">

  <div class="col-md-7"></div>
	<div class="col-md-4">
    <h2>Se connecter</h2>

		<hr/>
<form method="post" action="login_process.php">
  <div class="form-group">
    <label>Nom d'utilisateur :</label>
    <input type="text" name="Username" class="form-control" />
    <br>
  </div>
  <div class="form-group">
    <label>Mot de passe :</label>
    <input type="Password" name="Password" class="form-control"/>
    <br>
  </div>
  <div class="form-group">
    <label>Se rappeler de moi ?:</label>
    <input type="checkbox" name="auto"/>
    <br>
  </div>
  <div class="form-group text-center">
    <button type="submit" class="btn btn-primary"/>Se connecter</button>
    <br>
    <a href="register.php" class="">Créer un compte</a>
  </div>
  </form>
</div>
<div class="col-md-1"></div>
</div>


<?php
include __DIR__.'/../partial/footer.php';
?>
