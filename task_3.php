<?php


function generateFibonacciNumbers($n)
{
    $num1 = 0;
    $num2 = 1;

    for ($i = 0; $i < $n; $i++) {

        $num3 = $num1 + $num2;

        if ($num3 > 100) {
            break;
        }

        echo $num1 . ' ';

        $num1 = $num2;
        $num2 = $num3;
    }
}

generateFibonacciNumbers(10);
