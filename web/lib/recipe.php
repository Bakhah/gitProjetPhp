<?php
  class recipe{
    private $id;
    private $name;
    private $instruction;
    private $id_user;

    function __constuct($array){
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
    }
    /**
    * Affiche les champs de saisie pour une recette existante
    * ou pour une création de nouvelle recette (ne pas utiliser de paramètres)
    */
    function champ($name,$instruction,$product_tab){
      echo "<div class='container form-horizontal'>
        <!--Champ recette : DEBUT-->
        <div class='form-group form-group-lg'>
          <label class='control-label col-sm-2' for='nom'>Recette :</label>
          <div class='col-sm-4'>";
          //Affiche le nom ou un champ vide
          if(isset($name)){
            echo "<input type='text' class='form-control' id='nom' value=$name>";
          }else{
            echo "<input type='text' class='form-control' id='nom' placeholder='nom'>";
          }
          echo "
          </div>
        </div>
        <!--Champ recette : FIN-->
        <!--Champ Inscrution : DEBUT-->
        <div class='form-group'>
          <label class='control-label col-sm-2' for='instruction'>Instruction :</label>
          <div class='col-sm-9'>";
          //Affiche les instructions ou un champ vide
          if(isset($instruction)){
            echo "<textarea class='form-control' rows='3' id='instruction' >$instruction</textarea>";
          }else{
            echo "<textarea class='form-control' rows='3' id='instruction' placeholder='Etapes'></textarea>";
          }
          echo "
          </div>
        </div>
        <!--Champ Inscrution : FIN-->
        <!--Conteneur de produits : DEBUT-->
        <div id='products_container'>";
          //Affiche les produits ou un champ vide
          if(isset($product_tab)){
            foreach ($product_tab as $product) {
              echo "<!--Champ $product[0] : DEBUT-->
              <div class='form-group product'>
                <label class='control-label col-sm-2' for='produit'>Produit :</label>
                <div class='col-sm-4'>
                  <input type='text' class='form-control prod_name' name='produit' value= $product[0]>
                </div>
                <div class='col-sm-2'>
                  <input type='text' class='form-control prod_quantity' name='quantite' value= $product[1]>
                </div>
                <div class='col-sm-2'>
                  <input type='text' class='form-control prod_unite' name='unite' value= $product[2]>
                </div>
                <button type='button' class='btn btn-danger supp_prod'>Supprimer</button>
              </div>
              <!--Champ $product[0] : FIN-->";
            }
          }else{
            echo "<!--Champ produit : DEBUT-->
            <div class='form-group product'>
              <label class='control-label col-sm-2' for='produit'>Produit :</label>
              <div class='col-sm-4'>
                <input type='text' class='form-control' name='produit' placeholder='libellé'>
              </div>
              <div class='col-sm-2'>
                <input type='text' class='form-control' name='quantite' placeholder='qté'>
              </div>
              <div class='col-sm-2'>
                <input type='text' class='form-control' name='unite' placeholder='unité'>
              </div>
              <button type='button' class='btn btn-danger supp_prod'>Supprimer</button>
            </div>
            <!--Champ produit : FIN-->";
          }
        // Ajout du bouton Ajouter
        echo "</div>
        <!--Conteneur de produits : FIN-->
        <!--Bouton Ajouter : DEBUT-->
        <div class='	'>
          <button type='button' class='col-md-offset-2 btn btn-primary' id='ajoutProduit'>Ajouter produit</button>
        </div>
        <!--Bouton Ajouter : FIN-->";
        // Ajout du bouton Enregistrer
        echo "<!--Bouton enregistrer : DEBUT-->
      				<div class='form-group'>
      					<div class='col-sm-2'>
      						<button type='button' class='btn btn-success' id='enregistrer'>Enregistrer</button>
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
