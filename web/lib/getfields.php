<?php
	if(isset($_POST['enregistrer'])){ //check if form was submitted				
		//On recupère le nom				
		if(isset($_POST['nom'])){
			$id = $_POST['nom'];
		}
		//On recupère l'instruction
		if(isset($_POST['instruction'])){
			$instruction = $_POST['insctruction'];
		}
		//On recupère le tableau de tous les libellés
		if(isset($_POST['produit'])){
			$tab_libelle = $_POST['produit'];
		}
		//On recupère le tableau de toutes les quantités
		if(isset($_POST['quantite'])){
			$tab_quantite = $_POST['quantite'];
		}
		//On recupère le tableau de toutes les unités
		if(isset($_POST['unite'])){
			$tab_unite = $_POST['unite'];
		}
		$nb_produit = count($tab_libelle);
		$tab_produit = array();
		//On crée un tableau de produit composé d'un libellé, d'une quantité et d'une unité				
		for($i=0;$i<$nb_produit;$i++){
			$prod = array(
							$tab_libelle[$i],
							$tab_quantite[$i],
							$tab_unite[$i]
							);
			array_push($tab_produit,$prod);
		}
		print_r($tab_produit);
	}
?>
