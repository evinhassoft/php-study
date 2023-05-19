<?php

$_POST = array (
    'fish' => 'salmon',
    'dog' => null
);

$fish = $_POST['fish'] ?? 'is null';
$dog = $_POST['dog'] ?? 'is null';

echo $fish . "   " . $dog;

$first = null;
$seccond = null;

$result = $first ?? $seccond ?? '   is null';

echo $result;