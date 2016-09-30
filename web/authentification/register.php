<?php
include __DIR__.'/../partial/header.php';
include __DIR__.'/startSession.php';
	if($user->isSigned()) redirect(".");

	$d = @$_SESSION["regData"];
	unset($_SESSION["regData"]);
	echo "@";
?>
<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<h2>Register</h2>

		<hr/>

		<form method="post" action="register_process.php" data-success="/login">
			<div class="form-group">
				<label>Username:</label>
				<input name="Username" type="text" required class="form-control" autofocus>
			</div>

			<div class="form-group">
				<label>Email: </label>
				<input name="Email" type="text" required class="form-control">
			</div>

			<div class="form-group">
				<label>Password:</label>
				<input name="Password" type="password" required class="form-control">
			</div>

			<div class="form-group">
				<label>Confirm Password:</label>
				<input name="Password2" type="password" required class="form-control">
			</div>


			<div class="form-group text-center">
				<button type="submit" class="btn btn-primary">Register</button>
				<br>
				<a href="/login" class="">Login</a>
			</div>
		</form>

	</div>
</div>
