<?php

// $arr = [2,4,3,1,6,7,5,8,0,9];

// $count = count($arr);

// for ($i=0; $i < $count ; $i++) { 
//    for ($j=0; $j < $count -1 ; $j++) { 
//    if($arr[$j] > $arr[$j + 1])
//     {
//         $firstdigit = $arr[$j];
//         $arr[$j] = $arr[$j + 1];
//         $arr[$j + 1] = $firstdigit ;
//     }
//    }
// }
// echo "<pre>";
//   print_r($arr) ;






$arr = [2,4,3,1,6,7,5,8,0,9];

$count = count($arr);

for ($i=0; $i < $count ; $i++) { 
   for ($j=0; $j < $count -1 ; $j++) { 
   if($arr[$j] < $arr[$j + 1])
    {
        $firstdigit = $arr[$j];
        $arr[$j] = $arr[$j + 1];
        $arr[$j + 1] = $firstdigit ;
    }
   }
}
echo "<pre>";
  print_r($arr) ;