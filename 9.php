<?php

$text = "Route Academy";
$search = "Route";

if(preg_match("/$search/" , $text))
    {
        echo"text contain Route";
    }
    else
        {
            echo "text doesnt contain Route";
        }