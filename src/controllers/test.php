<?php
//Controller Temporário

$i1 = DateInterval::createFromDateString('9 hours');
$i2 = DateInterval::createFromDateString('6 hours');

$r1 = sumInterval($i1, $i2);
$r2 = subtractIntervals($i1, $i2);

print_r($r1);
echo '<hr>';
print_r($r2);
echo '<hr>';
print_r(getDateFromInterval($r1));
echo '<hr>';
print_r(getDateFromInterval($r2));