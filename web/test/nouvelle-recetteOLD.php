<?php
	include 'lib/connection.php';
	include 'partial/header.php';
?>
<!--Container : DEBUT-->
<div class="container">
	<!--Formulaire : DEBUT-->
	<form class="form-horizontal">
		<!--Champ recette : DEBUT-->
		<div class="form-group">
			<label class="control-label col-sm-2" for="nom">Recette :</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="nom" placeholder="nom">
			</div>
		</div>
		<!--Champ recette : FIN-->
		<!--Champ Inscrution : DEBUT-->
		<div class="form-group">
			<label class="control-label col-sm-2" for="instruction">Instruction :</label>
			<div class="col-sm-9">
				<textarea class="form-control" rows="3" id="instruction"></textarea>
			</div>
		</div>
		<!--Champ Inscrution : FIN-->
		<!--Champ Produit 1 : DEBUT-->
		<div class="form-group">
			<label class="control-label col-sm-2" for="produit1">Produit 1 :</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="produit1" placeholder="produit 1">
			</div>
			<label class="control-label col-sm-1" for="quantite1">Quantité :</label>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="quantite1" placeholder="quantite1">
			</div>
			<label class="control-label col-sm-1" for="unite1">unité :</label>
			<div class="col-sm-1">
				<input type="text" class="form-control" id="quantite1" placeholder="quantite1">
			</div>
			<button type="button" class="btn btn-danger" id="supp_prod1">Supprimer</button>
		</div>
		<!--Champ Produit 1 : FIN-->
		<!--Bouton Ajouter : DEBUT-->
		<div class="form-group">
			<div class="col-sm-2 col-md-offset-1">
				<button type="button" class="btn btn-primary" id="ajoutProduit">Ajouter produit</button>
			</div>
		</div>
		<!--Bouton Ajouter : FIN-->
		<!--Bouton enregistrer : DEBUT-->
		<div class="form-group">
			<div class="col-sm-2">
				<button type="button" class="btn btn-success" id="enregistrer">Enregistrer</button>
			</div>
		</div>
		<!--Bouton enregistrer : FIN-->
	</form>
	<!--Formulaire : FIN-->
</div>
<!--Container : FIN-->
<?php
	include 'partial/footer.php'
?>
