<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$count = count($arr);

$arr = array_values($arr);

for ($i = 0; $i < $count; $i++) {
    if ($arr[$i] % 2 == 0) {
        unset($arr[$i]);
    }
}
$arr = array_values($arr);
echo"<pre>";
print_r($arr);