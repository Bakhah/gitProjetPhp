<?php
	include __DIR__.'/../lib/connection.php';
	$con = GetMyConnection();
	$sql = "SELECT id, name FROM unit";
	$req = mysqli_query($con, $sql) or die (mysql_error());
	$liste_unite = array();
	$produit = array();
	while($row = mysqli_fetch_row($req)){
		echo "<option value='$row[0]'>$row[1]</option>";
	}
?>
