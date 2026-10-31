<?php

function isPrime($n)
    {
    if ($n <= 1) 
    {
        return false;
    }

    for ($i = 2; $i < $n; $i++)
   {
        if ($n % $i == 0)
        {
            return false;
        }
    }

    return true;
}

$num = 11;

if (isPrime($num)) 
{
    echo "it is prime number";
}
else 
{
    echo "it is not prime";
}
