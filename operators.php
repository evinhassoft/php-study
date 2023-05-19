<?php

$ageGabriel = 21;
$ageDanilo = 21;

var_dump($ageDanilo === $ageGabriel); // true, === verify the  content and type
var_dump(!$ageDanilo === $ageGabriel); // ! deny the operation

// && and
// || or

if ($ageDanilo == $ageGabriel){
    echo "is true";
} else {
    echo "is false";
}

$cpf = '123.456.789-10';
$cnpj = '';

$typeDocument = ($cnpj != '') ? 'cnpj' : 'cpf';

echo $typeDocument;
