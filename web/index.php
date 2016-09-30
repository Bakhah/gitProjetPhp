<?php
include 'partial/header.php';
include 'lib/connection.php';
?>
<div class="container">

  <h1>PROJET</h1>

  <?php
  echo "Projet de Louis Lalleau et Franck Hourdin";
  GetMyConnection();

  $sql = 'SELECT * FROM product';
  $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
  echo "<h3>Test d'affichage de la table product :</h3>";
  while ($data = mysql_fetch_assoc($req)) {
    echo '<br>'.$data[id].' '.$data[name].' '.$data[price].' '.$data[price].'€ '.$data[id_unit].'</br>';
  };

  ?>
</div>
  <?php
  include 'partial/footer.php';
  ?>
