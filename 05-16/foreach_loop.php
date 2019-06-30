<?php

declare(strict_types = 1);

$array = [
    'pirmas',
    'zmogus' => 'antras',
    'trecias',
];

foreach ($array as $key => $name) {
    if ($key == 'zmogus'){
        continue;
    }
    echo $key . ': ' . $name . '|';
}