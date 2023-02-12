<?php
include_once "./calculationFunctions/functions.php";

$res =  sum(3, 3);

echo 'Total = ' . $res;

$num = 3;

$factorialOfNum = factorial($num);

echo 'Factorial of ' . $num . ' is =' . $factorialOfNum;

$max = 3;
$min = 1;

$ran = randomNumberGenerator($min, $max);

echo '\n Random Number between ' . $max . 'and ' . $min . '=' . $ran;
