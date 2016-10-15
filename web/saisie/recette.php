<!--Saisie d'une nouvelle recette-->
<?php
	//Header
	include __DIR__.'/../partial/header.php';
  include __DIR__.'/../lib/recipe.php';

  echo "<h1>Nouvelle recette</h1>";
  $recipe = new recipe();
  $recipe->displaychamp();
  
  //Recuperation des saisies
  include __DIR__.'/../lib/getfields.php';
?>








<?php
	//Librairie JS
	include __DIR__.'/../lib/js.php';
	//Footer
	include __DIR__.'/../partial/footer.php'
 ?>
