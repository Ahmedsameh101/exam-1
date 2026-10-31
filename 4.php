<?php

$arr = [2, 4, 6, 8, 10];

$sum = 0;
$count = count($arr);

for ($i = 0; $i < $count; $i++) {
    $sum = $sum + $arr[$i];
}

$avg = $sum / $count;

echo "Avg = " . $avg;
