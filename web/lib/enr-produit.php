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
  //Debug
  echo "<p>in</p>";

  //On recupère les saisies
  $name   = $_POST['nom'];
  $unite 	= $_POST['unite'];
  $prix   = $_POST['prix'];

  //Debug
  echo "<p>$name, $unite, $prix</p>";

  //On etablie une connection
	include_once __DIR__.'/../lib/connection.php';
	$con = GetMyConnection();

  /**
	* Insertion du produit dans la base
	*/
  $sql = "INSERT INTO product (name, price, id_unit) VALUES ('$name',$prix,'$unite')";
  //Debug
  echo $sql;
  $req = mysqli_query($con, $sql) or die (mysql_error());


  //On retire les saisies de $_POST
  unset(
  $_POST['enregistrer'],
  $_POST['nom'],
  $_POST['unite']
);
}else{
  //Debug
  echo "<p>out</p>";
}

?>
