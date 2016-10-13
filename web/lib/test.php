<?php
  include '../partial/header.php';
  include 'connection.php';
  include 'recipe.php';
  
  $tab_product = array(
    array("lardons",1,"kg"),
    array("pomme de terre",10,"kg"),
    array("lait",2,"litre"),
    array("oignon",1,"kg"),
    array("reblochon",1,"kg")
  );
  //print_r($tab_product);
  $recette = new recipe();
  $recette->champ('tartiflette','cuire,manger,dormir',$tab_product);
?>
