<?php
include __DIR__.'/../partial/header.php';

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$moment = $_POST['moment'];
?>

<div class="container">
  <h3>Nouvelle recette pour le <?php echo $day; ?>/<?php echo $month; ?>/<?php echo $year; ?>
    <?php if ($moment == 'midday') {
    echo 'midi';
} else {
    echo 'soir';
}

    ?>
  </h3>
  <form method="post" action="verif.php">
    Recette : <input type="text" name="nom" size="12"><br>
              <input type="submit" value="Ajouter la recette">
  </form>
</div>
<?php
include __DIR__.'/../partial/footer.php';
?>
