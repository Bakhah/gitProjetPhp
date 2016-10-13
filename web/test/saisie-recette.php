<?php
	include 'lib/connection.php';
	include 'partial/header.php';
	include 'lib/recipe.php';

	echo "<h1>Nouvelle recette</h1>";
	$recette = new recipe();
	//Affichage des champs de saisie
	$recette->champ();	
	include 'partial/footer.php'
?>
