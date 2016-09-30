<?php
include __DIR__.'/../partial/header.php';
include __DIR__.'/startSession.php';
	if($user->isSigned()) redirect(".");

	$d = @$_SESSION["regData"];
	unset($_SESSION["regData"]);
?>
<div class="row">
	<div class="col-md-1"> </div>
	<div class="col-md-5">
		<h2>Créer un compte</h2>

		<hr/>

		<form method="post" action="register_process.php" data-success="/login">
			<div class="form-group">
				<label>Nom d'utilisateur :</label>
				<input name="Username" type="text" required class="form-control" autofocus>
			</div>

			<div class="form-group">
				<label>Email : </label>
				<input name="Email" type="text" required class="form-control">
			</div>

			<div class="form-group">
				<label>Mot de passe :</label>
				<input name="Password" type="password" required class="form-control">
			</div>

			<div class="form-group">
				<label>Confirmation :</label>
				<input name="Password2" type="password" required class="form-control">
			</div>


			<div class="form-group text-center">
				<button type="submit" class="btn btn-primary">Créer un compte</button>
				<br>
				<a href="login.php" class="">Se connecter</a>
			</div>
		</form>

	</div>
	<div class="col-md-6"></div>
</div>
