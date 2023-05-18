<?php

// StdClass

$object = new \StdClass();
$object->name = "Gabriel";
$object->surname = "Evaristo";

var_dump($object);

echo $object->surname; // example
echo gettype($object); // object type