<?php
include __DIR__.'/../partial/header.php';
include __DIR__.'/../lib/connection.php';

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$moment = $_POST['moment'];
$recipe = $_POST['recipe'];


$con = GetMyConnection();
$sql = 'SELECT id, name FROM recipe';
$req = mysqli_query($con, $sql);
CleanUpDB();
?>

<div class="container">
  <h2>Modifier recette pour le <?php echo $day; ?>/<?php echo $month; ?>/<?php echo $year; ?>
    <?php if ($moment == 'midday')
    {
    echo 'midi :';
    } else
    {
    echo 'soir :';
    }
    ?>
  </h2>


<br><br>
  <div class="form-group">
    <form method="post" action="show.php">
    <label for="sel1">Sélectionnez une recette dans la liste : </label>
    <select class="form-control" id="id_recipe">
    <?php
    while ($data = mysqli_fetch_assoc($req))
    {
      echo '<option value="'.$data[id].'">'.$data[name].'</option>';
    }
    ?>
    <br>
    <input type="submit" class="btn btn-primary" title="Modifier" value="Envoyer">
    </form>
  </div>
</div>
<?php
include __DIR__.'/../partial/footer.php';
?>
