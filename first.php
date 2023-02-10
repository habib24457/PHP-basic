<?php
echo 'Hello World'; //This is how you write comment
echo 'Another World'; #Another comment

#variables

//Constants
const STATUS_PAID = 'paid';
echo STATUS_PAID;

echo PHP_VERSION; //predefined constants by PHP

$firstName = 'Habibur';
$lastName = 'Rahman';

echo 'Name = ',$firstName, '',$lastName;

echo '<br/>';

/* Data types*/

#4 Scalar types
#bool
$isCompleted = true;
#int
$score = 25;
#float
$price = 6.5;
#string
$productName = 'Laptop';
echo '<br/> Variables <br/>';
echo $isCompleted . '<br/>';
echo $score . '<br/>';
echo $price . '<br/>';
echo $productName . '<br/>';

# 4 common types
# Array
$numbers = [1,2,3,4,5,-5];
echo $numbers . '<br/>';
print_r($numbers);

if($isCompleted){
   echo 'It is completed';
}else {
    echo 'Boolean is false';
}




?>