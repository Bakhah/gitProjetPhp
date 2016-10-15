<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Recipe Manager</title>
		<!--Ajout des CSS-->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen" />
		<!--Ajout des librairies JS-->
		<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/recette.js"></script>
	</head>
	<body>
		<h1>Je suis le header</h1>
		<!--Formulaire : DEBUT-->
		<form action="" method="post">
		<!--Container : DEBUT-->
		<div class="container form-horizontal">
			<!--Champ recette : DEBUT-->
			<div class="form-group form-group-lg">
				<label class="control-label col-sm-2" for="nom">Recette :</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="nom" name="nom" placeholder="nom" required>
				</div>
			</div>
			<!--Champ recette : FIN-->
			<!--Champ Inscrution : DEBUT-->
			<div class="form-group">
				<label class="control-label col-sm-2" for="instruction">Instruction :</label>
				<div class="col-sm-9">
					<textarea class="form-control" rows="3" id="instruction" required></textarea>
				</div>
			</div>
			<!--Champ Inscrution : FIN-->
			<!--Conteneur de produits : DEBUT-->
			<div id="products_container">
				<!--Champ Produit 1 : DEBUT-->
				<div class="form-group product">
					<label class="control-label col-sm-2" for="produit">Produit :</label>
					<div class="col-sm-4">
						<select class="form-control" name="produit[]" required>
							<?php include 'listeProduits.php' ; ?>
						</select>
					</div>
					<div class="col-sm-2">
						<input type="text" class="form-control" name="quantite[]" placeholder="qté" required>
					</div>
					<div class="col-sm-2">
						<input type="text" class="form-control" name="unite[]" placeholder="unité" required>
					</div>
					<button type="button" class="btn btn-danger supp_prod">Supprimer</button>
				</div>
				<!--Champ Produit 1 : FIN-->
				<!--Champ Produit 2 : DEBUT-->
				<div class="form-group product">
					<label class="control-label col-sm-2" for="produit">Produit :</label>
					<div class="col-sm-4">
						<select class="form-control" name="produit[]" required>
							<?php include 'listeProduits.php' ; ?>
						</select>
					</div>
					<div class="col-sm-2">
						<input type="text" class="form-control" name="quantite[]" placeholder="qté" required>
					</div>
					<div class="col-sm-2">
						<input type="text" class="form-control" name="unite[]" placeholder="unité" required>
					</div>
					<button type="button" class="btn btn-danger supp_prod">Supprimer</button>
				</div>
				<!--Champ Produit 2 : FIN-->
				
			<!--Conteneur de produits : FIN-->

			<!--Bouton Ajouter : DEBUT-->
			<div class="	">
				<button type="button" class="col-md-offset-2 btn btn-primary" id="ajoutProduit">Ajouter produit</button>
			</div>
			<!--Bouton Ajouter : FIN-->
			<!--Bouton enregistrer : DEBUT-->
			<div class="form-group">
				<input type="submit" class="btn btn-success" name="enregistrer" value="Enregistrer"></input>
			</div>
			<!--Bouton enregistrer : FIN-->
		</div>
		<!--Container : FIN-->
	</form>
	<!--Formulaire : FIN-->
		<?php
			include 'getfields.php';
		?>

	</body>
</html>

