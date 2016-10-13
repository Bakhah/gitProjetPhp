<?php
  include '../lib/connection.php';
  include '../lib/recipe.php';
  echo "test";
  $tableau = array(
    'id'=>'0',
    'name'=>'Tartiflette',
    'instruction'=>"<ol type='1'><li>cuire</li><li>servir</li><li>manger</li></ol>",
    'id_user'=>'1'
  );
  print_r($tableau);
  $recette = new recipe($tableau);
  //$recette->display();
 ?>
