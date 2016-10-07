
<?php
include __DIR__.'/../partial/header.php';
include __DIR__.'/../authentification/startSession.php';
require 'SimpleCalendar.php';

$date = date('m-Y');

$Calendar = new donatj\SimpleCalendar('October 2016');
$Calendar->addDailyHtml('midday', 'Tagliatelles bolognaise', '11-10-2016');
$Calendar->addDailyHtml('evening', 'Carpaccio de boeuf Frites', '11-10-2016');

echo '<h1>'.$date.'</h1>';
?>

<div class="container">
<div class="table-responsive">

<?php
$Calendar->show();
?>

</div></div>

<?php
include __DIR__.'/../partial/footer.php';
?>
