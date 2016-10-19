<?php


  class recipe{
    private $id;
    private $name;
    private $instruction;
    private $id_user;
    /*
    function __constuct(){
      if(isset($array['id'])
      && isset($array['name'])
      && isset($array['instruction'])
      && isset($array['id_user'])){
        $this->id = $array['id'];
        $this->name = $array['name'];
        $this->instruction = $array['instruction'];
        $this->id_user = $array['id_user'];
      }else{
        echo 'Erreur importation recette';
      }
    }*/
    /**
    * Affiche les champs de saisie pour une recette existante
    * ou pour une création de nouvelle recette (ne pas utiliser de paramètres)
    */
    function displaychamp($name,$instruction,$product_tab){
      include __DIR__.'/../lib/listeProduits.php';
      echo "
      <!--Container : DEBUT-->
      <div class='container form-horizontal'>
        <!--Formulaire : DEBUT-->
        <form action='' method='post'>
          <!--Champ recette : DEBUT-->
          <div class='form-group'>
            <label class='control-label col-sm-2' for='nom'>Recette :</label>
            <div class='col-sm-4'>";
            //Affiche le nom ou un champ vide
            if(isset($name)){
              echo "<input type='text' class='form-control' id='nom' value=$name>";
            }else{
              echo "<input type='text' class='form-control' name='nom' placeholder='nom' required>";
            }
            echo
            "
            </div>
          </div>
          <!--Champ recette : FIN-->
          <!--Champ Inscrution : DEBUT-->
          <div class='form-group'>
            <label class='control-label col-sm-2' for='instruction'>Instruction :</label>
            <div class='col-sm-8'>";
            //Affiche les instructions ou un champ vide
            if(isset($instruction)){
              echo "<textarea class='form-control' rows='3' name='instruction' required>$instruction</textarea>";
            }else{
              echo "<textarea class='form-control' rows='3' name='instruction' placeholder='Etapes' required></textarea>";
            }
            echo "
            </div>
          </div>
          <!--Champ Inscrution : FIN-->
            <h3>Pour une base de 4 personnes</h3>

          <!--Conteneur de produits : DEBUT-->
          <div id='products_container'>";
            //Affiche les produits ou un champ vide
            if(isset($product_tab)){
              foreach ($product_tab as $product) {
                echo "<!--Champ $product[0] : DEBUT-->
                <div class='form-group product'>
                  <label class='control-label col-sm-2' for='produit'>Produit :</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control prod_name' name='produit[]' value= $product[0] required>
                  </div>
                  <div class='col-sm-2'>
                    <input type='text' class='form-control prod_quantity' name='quantite[]' value= $product[1] required>
                  </div>
                  <button type='button' class='btn btn-danger supp_prod'>Supprimer</button>
                </div>
                <!--Champ $product[0] : FIN-->";
              }
            }else{
              echo "
              <!--Champ produit : DEBUT-->
              <div class='form-group product'>
                <label class='control-label col-sm-2' for='produit'>Produit :</label>
                <div class='col-sm-4'>
                  <select class='form-control' name='produit[]' required>";
                    foreach ($liste_produit as $produit) {
                      echo "<option value='$produit[0]'>$produit[1] / $produit[2]</option>";
                    }
                  echo "
                  </select>
                </div>
                <div class='col-sm-2'>
                  <input type='text' class='form-control' name='quantite[]' placeholder='qté' required>
                </div>
                <button type='button' class='btn btn-danger supp_prod'>Supprimer</button>
              </div>
              <!--Champ produit : FIN-->";
            }
          // Ajout du bouton Ajouter
          echo "
          </div>
          <!--Conteneur de produits : FIN-->
          <!--Bouton Ajouter : DEBUT-->
          <div class=''>
            <button type='button' class='col-md-offset-2 btn btn-primary' id='ajoutProduit'>Ajouter produit</button>
          </div>
          <!--Bouton Ajouter : FIN-->";
          // Ajout du bouton Enregistrer
          echo "
          <!--Bouton enregistrer : DEBUT-->
  				<div class='form-group'>
  					<div class=''>
  						<input type='submit' class='btn btn-success' name='enregistrer' value='Enregistrer'></input>
  					</div>
  				</div>
          <!--Bouton enregistrer : FIN-->
        </form>
        <!--Formulaire : FIN-->
      </div>
  	<!--Container : FIN-->";
    }
  }
?>
