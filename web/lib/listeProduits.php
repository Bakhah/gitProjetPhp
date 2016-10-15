<?php
	$tab_produit = array(
"pomme de terre",
"lardons",
"gruyère",
"pâtes",
"sel",
"poivre",
"jambon"
	);
	foreach($tab_produit as $produit){
		echo "<option value='$produit'>$produit</option>";
	}
?>
