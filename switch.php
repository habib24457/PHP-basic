<?php
$checkPayment = 1;

switch($checkPayment){
    case 1:
        echo 'Payment is OK';
        break;

    case 2:
        echo 'Payment is not OK';
        break;

    default:
        echo 'Unknown Payment';

        echo '<br/>';
}


//match is similar to switch with some shortcuts and it is only available in PHP 8

/***
$paymentStatus = 0;
$check = match ($paymentStatus){
    1=> 'Paid',
    2=> 'Unpaid',
    0=> 'Unknown',
};
 * **/


?>