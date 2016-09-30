<?php
include __DIR__.'/../partial/header.php';
include __DIR__.'/startSession.php';


  $username = $_POST['Username'];

  $password = $_POST['Password'];
  $auto = $_POST['auto'];  //To remember user with a cookie for autologin

  //Login with credentials
  $user->login($username,$password,$auto);


  include __DIR__.'/../partial/footer.php';
  header('Location: ../index.php');
  exit();
?>
