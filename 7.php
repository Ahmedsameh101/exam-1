<?php

$date = "2012-12-21";

$newdate = date("Y-m-d" , strtotime($date . "+1 month"));

echo $newdate;