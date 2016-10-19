<?php
include __DIR__.'/../partial/header.php';
include __DIR__.'/../lib/connection.php';

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$moment = $_POST['moment'];
$recipe = $_POST['recipe'];

$date = $year.'-'.sprintf("%02d", $month).'-'.sprintf("%02d", $day);

$con = GetMyConnection();
$sql = 'SELECT id, name FROM recipe';
$req = mysqli_query($con, $sql);
CleanUpDB();
?>

<div class="container">
  <div class="page-header">
  <h1>Modifier recette pour le <?php echo $day; ?>/<?php echo $month; ?>/<?php echo $year; ?>
    <?php if ($moment == 'midday')
    {
    echo 'midi :';
    } else
    {
    echo 'soir :';
    }
    ?>
  </h1>
</div>


<br><br>
<div class="jumbotron">
  <div class="form-group">
    <form method="post" action="show.php">
    <label for="sel1">Sélectionnez une recette dans la liste : </label>
    <select class="form-control" name="recipe_id">
    <?php
    while ($data = mysqli_fetch_assoc($req))
    {
      echo '<option value="'.$data[id].'">'.$data[name].'</option>';
    }
    ?>
    <br>
    <input type="hidden" name="date" value="<?php echo $date; ?>">
    <input type="hidden" name="day_moment" value="<?php echo $moment; ?>"><br>
    <button type="submit" class="btn btn-primary btn-lg" name="modify">Modifier</button>
    <button type="submit" class="btn btn-warning btn-lg" name="delete">Supprimer</button>
    </form>
  </div>
</div>
</div>
<?php
include __DIR__.'/../partial/footer.php';
?>
