
<?php
/**********************************************************
recupération des saisies utilisateur
pour l'insertion d'une nouvelle recette et de ses besoins
**********************************************************/

//On check la présence des saisies dans $_POST
if(isset(	$_POST['enregistrer'],
$_POST['nom'],
$_POST['instruction'],
$_POST['produit'],
$_POST['quantite'])){

	//On recupère les saisies
	$name 				= $_POST['nom'];
	$instruction 	= $_POST['instruction'];
	$tab_libelle 	= $_POST['produit'];
	$tab_quantite = $_POST['quantite'];

	//On crée un tableau de produit composé d'un libellé, d'une quantité et d'une unité
	$nb_produit 	= count($tab_libelle);
	$tab_produit 	= array();
	for($i=0;$i<$nb_produit;$i++){
		$prod = array(
			$tab_libelle[$i],
			$tab_quantite[$i]
		);
		array_push($tab_produit,$prod);
	}
	//On etablie une connection
	include_once __DIR__.'/../lib/connection.php';
	$con = GetMyConnection();

	/**
	* Insertion de la recette dans la base
	*/
	//On recupère l'id_user
	$id_user = $_SESSION['userData']['data']['ID'];

	$sql = "INSERT INTO recipe (name, instruction, id_user) VALUES ('$name','$instruction','$id_user')";
	$req = mysqli_query($con, $sql) or die (mysql_error());

	/**
	* Insertion des besoins dans la base
	*/
	//On recupère l'id de la nouvelle recette
	$sql = "SELECT id	FROM recipe	WHERE	name='$name'";
	$req = mysqli_query($con, $sql) or die (mysql_error($con));
	$result = mysqli_fetch_assoc($req);
	$id_recipe = $result['id'];

	//On ajoute les besoins
	foreach ($tab_produit as $produit) {
		$sql = "INSERT INTO needs (id_product, quantity, id_recipe) VALUES ('$produit[0]','$produit[1]','$id_recipe')";
		$req = mysqli_query($con, $sql) or die (mysql_error($con));
	}
    //On ferme la connexion
    CleanUpDB();
	
    //On retire les saisies de $_POST
	unset(
	$_POST['enregistrer'],
	$_POST['nom'],
	$_POST['instruction'],
	$_POST['produit'],
	$_POST['quantite']
);
}
?>
