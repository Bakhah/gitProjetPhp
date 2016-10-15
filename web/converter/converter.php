
<?php
include __DIR__.'/../lib/connection.php';
?>

<?php
  $recipe_id = $_POST['recipe_id'];
  $nb_people = $_POST['nb_people'];
  $final_array = array();
  $recipe_name;
  $i = 0;
  $total_price = 0;

  $con = GetMyConnection();
  $sql = 'select product.name as name, needs.quantity as quantity, unit.name as unit, product.price as price from product, needs, unit where (needs.id_recipe = '.$recipe_id.' and product.id = needs.id_product and unit.id = product.id_unit)';
  $req = mysqli_query($con, $sql);
  $req_2 = mysqli_query($con, 'select name from recipe where (id = '.$recipe_id.')');
  CleanUpDB();

  while ($data_2 = mysqli_fetch_assoc($req_2)) {
      $recipe_name = $data_2['name'];
  }
  while ($data = mysqli_fetch_assoc($req)) {
      $final_array[$i]['name'] = $data['name'];
      $final_array[$i]['quantity'] = $data['quantity'] * $nb_people / 4;
      $final_array[$i]['unit'] = $data['unit'];
      $final_array[$i]['price'] = $data['price'] * $nb_people / 4;
      ++$i;
  }
  include __DIR__.'/../partial/header.php';

  ?>

  <div class="container">
    <div class="page-header">
      <h1>Résultat de la conversion</h1>
    </div>
    <div class="jumbotron">
      <h1><?php echo $recipe_name ?> pour <?php echo $nb_people ?> personnes :</h1><br><br><br>
      <table class="table">
        <tr>
          <th><strong>Nom de l'ingrédient :</strong></th>
          <th><strong>Quantité :</strong></th>
          <th><strong>Unité :</strong></th>
          <th><strong>Prix :</strong></th>
        </tr>
        <?php
        foreach ($final_array as $array)
        {
          echo '<tr><td>'.$array['name'].'</td><td>'.$array['quantity'].'</td><td>'.$array['unit'].'</td><td>'.$array['price'].' €</td></tr>';
          $total_price += $array['price'];
        }
        ?>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <th><?php echo 'Total = '.$total_price.' €'; ?></th>
        </tr>
      </table>
      <button class="btn btn-primary btn-lg" onClick="window.print()">Imprimer</button>
      <button class="btn btn-warning btn-lg" onclick="window.location.href='show.php'">Retour</button>
    </div>
  </div>
  <?php
  include __DIR__.'/../partial/footer.php';

  ?>
