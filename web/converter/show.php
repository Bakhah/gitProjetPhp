
<?php
include __DIR__.'/../partial/header.php';
include __DIR__.'/../lib/connection.php';

$con = GetMyConnection();
$sql = 'SELECT id, name FROM recipe';
$req = mysqli_query($con, $sql);
CleanUpDB();
?>

<div class="container">
  <h1>Convertisseur de quantités : </h1>
  <div class="jumbotron">
  <form method="post" action="converter.php">
    <label>Nom de la recette :</label>
    <select class="form-control" name="recipe_id">
    <?php
    while ($data = mysqli_fetch_assoc($req)) {
        echo '<option value="'.$data[id].'">'.$data[name].'</option>';
    }
    ?>
  </select>
    <br>
    <label>Nombre de personnes :</label>
    <input type="text" name="nb_people" class="form-control" />
    <br>
    <button type="submit" class="btn btn-primary btn-lg" name="modify">Convertir</button>
  </form>
</div>
</div>
<?php
include __DIR__.'/../partial/footer.php';
?>
