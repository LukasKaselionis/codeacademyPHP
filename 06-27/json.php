<?php

declare(strict_types = 1);

$menu = [
    [
        'title' => 'Home',
        'link' => '/',
    ],
    [
        'title' => 'About us',
        'link' => 'about-as',
    ],
    [
        'title' => 'Products',
        'link' => 'Productss',
        'submenu' => [
            [
                'title' => 'Naujausia',
                'link' => 'newest',
            ],
            [
                'title' => 'Perkamiausi',
                'link' => 'most-sell',
            ],
            [
                'title' => 'Ispardavimas',
                'link' => 'sold',
            ],
        ],
    ],
    [
        'title' => 'Contacts',
        'link' => 'contacts',
    ],
    [
        'title' => 'Data',
        'link' => 'data.php',
    ],
];

/**
 * json_encode($array);
 * json_decode($string, $assoc = false);
 */

$json = json_encode($menu);
echo $json;

echo '<pre>';

print_r(json_decode($json, false));
print_r(json_decode($json, true));

echo '</pre>';

















