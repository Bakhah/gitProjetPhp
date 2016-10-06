<?php
include __DIR__.'/../partial/header.php';
include __DIR__.'/../authentification/startSession.php';
require('SimpleCalendar.php');


$Calendar = new donatj\SimpleCalendar('June 2010');
$Calendar->addDailyHtml("Midi : Mon cul", "5 June 2010");
$Calendar->addDailyHtml("Soir : Ma bite", "5 June 2010");
$Calendar->show();

include __DIR__.'/../partial/footer.php';
?>
