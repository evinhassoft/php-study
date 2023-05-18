<?php

$name = "Gabriel";
$age = 21;
$height = 1.72;
$formations = ['php', 'javascript'];
$client = new \StdClass();

echo '$name: ' . gettype($name) . '<br />';
echo '$age: ' . gettype($age) . '<br />';
echo '$height: ' . gettype($height) . '<br />';
echo '$formations: ' . gettype($formations) . '<br />';
echo '$client: ' . gettype($client) . '<br />';