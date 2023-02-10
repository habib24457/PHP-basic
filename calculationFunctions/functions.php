<?php
function sum ($firstNumber, $secondNumber){
    $total = $firstNumber + $secondNumber;

    return $total;
}

$callSum = sum(5,5);

echo 'Total number is = '.$callSum;

function isEven($randomNumber){
    if($randomNumber %2 == 0){
        return true;
    }else {
        return false;
    }
}