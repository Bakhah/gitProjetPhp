<?php
	include __DIR__.'/../lib/connection.php';
	$con = GetMyConnection();

	$sql = "SELECT product.id, product.name, unit.name FROM product INNER JOIN unit ON product.id_unit=unit.id";
	$req = mysqli_query($con, $sql) or die (mysql_error());
    
	//On ferme la connexion
    CleanUpDB();
    
    $liste_produit = array();
	$produit = array();
	while ($row = mysqli_fetch_row($req)) {
		$produit = array($row[0],$row[1],$row[2]);
		array_push($liste_produit,$produit);
	}
?>
