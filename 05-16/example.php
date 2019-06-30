<?php

declare(strict_types = 1);

// Use foreach and collet from all autos
// all: seats and color in different arrays

$autos = [
    [
    'name' => 'audi',
    'model' => 'a3',
    'parameters' => [
        'color' => 'blue',
        'seats' => 4,
        ],
    ],
    [
    'name' => 'audi',
    'model' => 'a4',
    'parameters' => [
        'color' => 'red',
        'seats' => 2,
        ],
    ],
    [
    'name' => 'bmw',
    'model' => '320',
    'parameters' => [
        'color' => 'black',
        'seats' => 5,
        ],
    ],
];

$color = [];
$seats = [];

foreach ($autos as $key => $auto) {
    foreach ($auto['parameters'] as $key => $value) {
        if ($key == 'color') {
            $color[] = $value;
        }
        if ($key == 'seats') {
            $seats[] = $value;
        }
    }
}

echo "--COLORS--";
print_r($color);
echo "--SEATS--";
print_r($seats);

$newAutos = [];

foreach ($autos as $auto) {
    $auto['full_name'] = $auto['name'] . ' ' . $auto['model'];
    $newAutos[] = $auto;
}

print_r($newAutos);