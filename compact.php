<?php

$name = "Gabriel";
$surname = "Evaristo";

$result = compact ('name', 'surname'); // compact = ('key'), the key is the variable; and the value is the content

print_r($result);