<?php
$programmingLanguages = ['PHP', 'Java', 'Javascript'];

echo $programmingLanguages[1] . '<br/>';

#check if an element exists in array
var_dump(isset($programmingLanguages[2]));

echo '<br/>';

#Assign values in arrays
$myArray = [
    'name' => 'habib',
    'age' => 28,
    'profession' => 'Programmer'
];

$myArray['profession'] = 'Developer';

echo '<pre>';
print_r($myArray);
echo '<pre/>';

#complex array
$students = [
    'engineering' => [
        'course' => 'Computer Science',
        'period' => '4 years',
        'cGPA' => '4.0',
        'isGood' => false,
        'batches' => [
            ['firstBatch' => 2012, 'end' => '2013 Sept'],
            ['firstBatch' => 2014, 'end' => '2015 Oct']
        ]
    ],
    'commerce' => [
        'course' => 'BBA',
        'period' => '5 years',
        'cGPA' => '5.0',
        'isGood' => false,
        'batches' => [
            ['firstBatch' => 2012, 'end' => '2013 Sept'],
            ['firstBatch' => 2014, 'end' => '2015 Oct']
        ]
    ]
];

//access a value from multi dimensional array
echo $students['engineering']['course'] . '<br/>';
echo $students['commerce']['batches'][0]['end'];

#Array push, pop, shift
$anotherArray = [1, 2, 3, 4, 5];
echo '<br/>Original array <br/>';
print_r($anotherArray);

array_push($anotherArray, 6); // add an element at the end of array

echo '<pre>';
print_r($anotherArray);
echo '<pre/>';

echo 'Array after pop, adds a new element at the end of the array';
array_pop($anotherArray); //remove the last element from the array
echo '<pre>';
print_r($anotherArray);
echo '<pre/>';

echo array_shift($anotherArray); //removes the first element
echo 'Array after shift which removes the first element';
echo '<pre>';
print_r($anotherArray);
echo '<pre/>';

echo 'After unset, removes a specific element from the array';
unset($anotherArray[2], $anotherArray[4]);
echo '<pre>';
print_r($anotherArray);
echo '<pre/>';

#show an array within a range

$randomArray = range(1, 5);
echo 'Random array';
print_r($randomArray);
