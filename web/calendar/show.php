<?php
include __DIR__.'/../partial/header.php';
include __DIR__.'/../authentification/startSession.php';
require('SimpleCalendar.php');

$date = date("m-Y");

echo "<h2>".$date."</h2>";
$Calendar = new donatj\SimpleCalendar($date);
$Calendar->addDailyHtml("Midi : Mon cul", "14 October 2016");
$Calendar->addDailyHtml("Soir : Ma bite", "14 October 2016");
$Calendar->show();

include __DIR__.'/../partial/footer.php';
?>
