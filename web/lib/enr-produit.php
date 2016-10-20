<?php
/************************************
recupération des saisies utilisateur
pour l'insertion d'un nouveau produit
*************************************/

//On check la présence des saisies dans $_POST
if(isset(	$_POST['enregistrer'],
$_POST['nom'],
$_POST['unite'],
$_POST['prix'])){

  //On recupère les saisies
  $name   = $_POST['nom'];
  $unite 	= $_POST['unite'];
  $prix   = $_POST['prix'];


  //On etablie une connection
	include_once __DIR__.'/../lib/connection.php';
	$con = GetMyConnection();

  /**
	* Insertion du produit dans la base
	*/
  $sql = "INSERT INTO product (name, price, id_unit) VALUES ('$name',$prix,'$unite')";
  $req = mysqli_query($con, $sql) or die (mysql_error());
  //On ferme la connexion
  CleanUpDB();

  //On retire les saisies de $_POST
  unset(
  $_POST['enregistrer'],
  $_POST['nom'],
  $_POST['unite']
	);
	
}
?>
