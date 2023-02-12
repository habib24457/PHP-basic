<?php

#add two numbers
function sum($firstNumber, $secondNumber)
{
    $total = $firstNumber + $secondNumber;

    return $total;
}

#check if number is even or odd
function isEven($randomNumber)
{
    if ($randomNumber % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

#strict type
function factorial(int $number)
{
    $result = 1;

    for ($i = $number; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}


#function that returns a random number on each call
function randomNumberGenerator(int $min, int $max)
{
    return mt_rand($min, $max);
}
