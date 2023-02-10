<?php

#loops


/* for loop */
for ($i = 0; $i < 5; $i++){
    echo 'This is = ',$i .'<br/>';
}

/* foreach loop */
$programmingLanguages = ['php','javascript','c#','c++'];

foreach ($programmingLanguages as $key => $language){
    echo $key . ':' .'Language Name :',$language . '<br/>';
}

unset($language); //if we don't unset the variable from foreach, it will not be destroyed and can be used later as well outside of the scope.

$user = [
    'name' => 'Habib',
    'email' => 'habib@gmail.com',
    'skills' => 'full-stack'
];

echo '<br/>'.'Values after using foreach <br/>';
foreach ($user as $key => $value){
    echo $key.':'. $value .'<br/>';
    //using implode and json_ecnode

    echo json_encode($value).'<br/>';
}

?>