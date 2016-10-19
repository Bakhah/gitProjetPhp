<!--Saisie d'une nouvelle recette-->
<?php
	//Header
	include __DIR__.'/../partial/header.php';
  include __DIR__.'/../lib/recipe.php';

  echo "<div class='container'><h1>Nouvelle recette</h1></div><br>";
  $recipe = new recipe();
  $recipe->displaychamp();

  //Recuperation des saisies
  include __DIR__.'/../lib/enr-recette.php';
?>








<?php
	//Librairie JS
	include __DIR__.'/../lib/js.php';
	//Footer
	include __DIR__.'/../partial/footer.php'
 ?>
