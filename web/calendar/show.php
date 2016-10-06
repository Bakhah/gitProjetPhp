
<?php
include __DIR__.'/../partial/header.php';
include __DIR__.'/../authentification/startSession.php';
require('SimpleCalendar.php');

$date = date("m-Y");


$Calendar = new donatj\SimpleCalendar("October 2016");
$Calendar->addDailyHtml("Midi : Tagliatelles bolognaise", "11-10-2016");
$Calendar->addDailyHtml("Soir : Carpaccio de boeuf Frites", "11-10-2016");

echo "<h1>".$date."</h1>";
echo "<div class=\"container\">";
echo "<div class=\"table-responsive\">";
$Calendar->show();
echo "</div></div>";

include __DIR__.'/../partial/footer.php';
?>
