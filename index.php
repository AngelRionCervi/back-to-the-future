<?php

require 'TimeTravel.php';

$start = new DateTime('1985-12-31');
$end = new DateTime('1987-12-30');

$intervalSeconds = new DateInterval('PT1000000000S');
$intervalStep = new DateInterval('P1M1W1D');
$step = new DatePeriod($start, $intervalStep ,$end);

$voyage1 = new TimeTravel($start, $end);

echo $voyage1->getTravelInfo();
echo $voyage1->findDate($intervalSeconds);
foreach($voyage1->backToFutureStepByStep($step) as $date) {
    echo $date."\n";
};


