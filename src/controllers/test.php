<?php
//Controller Temporário

loadModel('WorkingHours');

$wh = WorkingHours::loadFromUserAndDate(1, date('Y-m-d'));
$workedInterval = $wh->getWorkedInterval()->format('%H:%I:%S');
print_r($workedInterval);
echo  '<hr>';

$lunchInterval = $wh->getLunchINterval()->format('%H:%I:%S');
print_r($lunchInterval);
echo  '<hr>';

print_r($wh->getExitTime());
echo  '<hr>';
