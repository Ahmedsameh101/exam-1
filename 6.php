<?php

$arr = [10 , 30 , 20];

if($arr[0] > $arr[1]  &&  $arr[0] > $arr[2])
    {
       echo"first number is the max";
    }


    elseif($arr[1] > $arr[0]  &&  $arr[1] > $arr[2])
    {
       echo"second number is the max";
    }


    elseif($arr[2] > $arr[0]  &&  $arr[2] > $arr[1])
    {
       echo"third number is the max";
    }