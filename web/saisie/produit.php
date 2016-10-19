<?php
/********************************************
Saisie et enregistrement d'un nouveau produit
*********************************************/

//Header
include __DIR__.'/../partial/header.php';
echo "<h1>Nouveau produit</h1>";
?>
<!--Container : DEBUT-->
<div class='container form-horizontal'>
  <!--Formulaire : DEBUT-->
  <form action='' method='post'>
    <!--Champ libelle : DEBUT-->
    <div class='form-group'>
      <label class='control-label col-sm-2' for='nom'>Nom :</label>
      <div class='col-sm-4'>
        <input type='text' class='form-control' name='nom' placeholder='libellé' required>
      </div>
    </div>
    <!--Champ libelle : FIN-->

    <!--Champ Unité : DEBUT-->
    <div class='form-group'>
      <label class='control-label col-sm-2' for='nom'>Unité :</label>
      <div class='col-sm-4'>
        <select class='form-control' name='unite' placeholder='libellé' required>
          <?php include __DIR__.'/../lib/listeUnite.php'; ?>
        </select>
      </div>
    </div>
    <!--Champ Unité : FIN-->

    <!--Champ prix : DEBUT-->
    <div class='form-group'>
      <label class='control-label col-sm-2' for='nom'>Prix :</label>
      <div class='col-sm-2'>
        <input type='text' class='form-control' name='prix' placeholder='€/unités' required>
      </div>
    </div>
    <!--Champ prix : FIN-->

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
<!--Container : FIN-->
  <?php
  include __DIR__.'/../lib/enr-produit.php';
  //Librairie JS
  include __DIR__.'/../lib/js.php';
  //Footer
  include __DIR__.'/../partial/footer.php'
  ?>
