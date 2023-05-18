<?php

$animals = array('dog', 'cat', 'bear'); // declaration array
$aquatic_animals = ['dolphin', 'shark', 'whale']; //declaration array
print_r($animals); // how to print the array


// associatives arrays declarations
$associative_array = array(
    'key' => 'value',
    'key2' => 'value2'
);

$associative_array2 = [
    'key3' => 'value3',
    'key4' => 'value4'
];

print_r($associative_array);
print_r($associative_array2);

echo $associative_array['key2']; // nice example