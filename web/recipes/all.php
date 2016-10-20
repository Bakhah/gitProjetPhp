<?php
include '../partial/header.php';
include '../lib/connection.php';

$con = GetMyConnection();
$sql = 'SELECT * FROM recipe';
$recipes = mysqli_query($con, $sql);
$count = 0;
?>

<div class="container">
  <div class="page-header">
      <h1>Toutes les recettes</h1>
  </div>
  <a href="../saisie/recette.php" class="btn btn-success">Créer une nouvelle recette</a><br><br>
  <div class="row">
    <?php
    while ($data = mysqli_fetch_assoc($recipes))
    { ?>
      <div class="col-md-3">
        <div class="col-md-4">
          <img src="../img/fork-knife.png" style="width:60px;height:60px;">
        </div>
        <div class="col-md-8">
          <h2><?php echo $data[name]; ?></h2>
        </div>
        <p> <?php echo $data[instruction]; ?></p>
        <p>
          <?php
          $prod = mysqli_query($con, "SELECT * FROM product, needs where (needs.id_recipe = ".$data[id]." AND product.id = needs.id_product)");
          while ($prod_data = mysqli_fetch_assoc($prod))
          {
            echo "<li>", $prod_data[name],"</li>";
          }
          ?>
        </p>
      </div>
    <?php
    $count++;
    if ($count == 3)
    {
    ?>
      </div>
      <div class="row">
      <?php $count = 0 ?>
    <?php
    }
  }
  ?>
</div>
</div>
</div>

<?php
CleanUpDB();
include '../partial/footer.php';
?>
