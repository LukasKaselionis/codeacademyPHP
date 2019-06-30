<?php

declare(strict_types = 1);

$fruits = [
    'Banana',
    'Apple',
    'Ananasas',
];

$stringFruits = '';
foreach($fruits as $fruit) {
    $stringFruits .= $fruit . ', ';
}

echo $stringFruits;

echo '<br>';

$implode = implode(', ', $fruits);
echo $implode;

echo '<br>';

echo '<pre>';

print_r(explode(', ' , $stringFruits));

print_r(explode(', ' , $implode));

echo '</pre>';