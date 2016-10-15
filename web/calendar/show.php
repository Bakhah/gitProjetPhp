
<?php
include __DIR__.'/../partial/header.php';
require 'SimpleCalendar.php';

$Calendar = new donatj\SimpleCalendar('October 2016');

if (isset($_POST))
{

  if (isset($_POST['modify']))
  {
    $Calendar->updateMenu($_POST['recipe_id'], $_POST['date'], $_POST['day_moment']);
  }
  if (isset($_POST['delete']))
  {
    $Calendar->deleteMenu($_POST['date'], $_POST['day_moment']);
    header('Location:show.php');
  }
}

echo '<h1>'.$date.'</h1>';
?>
<div class="container">
  <div class="page-header">
    <h1>Calendrier</h1>
  </div>
<div class="table-responsive">

<?php
$Calendar->show();
?>

</div></div>

<?php
include __DIR__.'/../partial/footer.php';
?>
