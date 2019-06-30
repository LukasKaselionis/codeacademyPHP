<?php

/**
 * ND: 1
 * Parasyti skriptuka naudojant foreach cikla,
 * kuris is $menu duomenu isvestu tik active = true
 */
$menu = [
    [
        'title' => 'Home',
        'link' => '',
        'active' => true,
    ],
    [
        'title' => 'Products',
        'link' => 'products',
        'active' => true,
        'submenu' => [
            [
                'title' => 'Naujausi',
                'link' => 'newest',
                'active' => true,
            ],
            [
                'title' => 'Perkamiausi',
                'link' => 'most-sell',
                'active' => true,
            ],
            [
                'title' => 'Ispardavimas',
                'link' => 'sold',
                'active' => true,
            ],
        ],
    ],
    [
        'title' => 'About us',
        'link' => 'about-as',
        'active' => false,
    ],
    [
        'title' => 'Contacts',
        'link' => 'contacts',
        'active' => true,
    ],
    [
        'title' => 'Data',
        'link' => 'data.php',
        'active' => false,
    ],
];

echo '<ul>';

foreach ($menu as $item) {
    if ($item['active'] == true) {
        echo '<li>';
        echo '<a href="' . $item['link'] . '">' . $item['title'] . '</a>';
        echo '</li>';
    }
    if(isset($item['submenu']) && !empty($item['submenu'])) {
        foreach ($item['submenu'] as $submenu) {
            if ($submenu['active'] == true) {
                echo '<ul>';
                echo '<li>';
                echo '<a href="' . $submenu['link'] . '">' . $submenu['title'] . '</a>';
                echo '</li>';
                echo '</ul>';
            }
        }
    }
}

echo '</ul>';


/**
 * ND: 2
 * Parasyti skriptuka naudojant foreach cikla,
 * Kuris i lentale isvestu tik melynos spalvos automobilius
 */
$autos = [
    [
        'brand' => 'Audi',
        'model' => 'A3',
        'year' => '1997',
        'color' => 'blue',
    ], 
    [
        'year' => '1996',
        'model' => 'A4',
        'color' => 'red',
        'brand' => 'Audi',
    ],
    [
        'brand' => 'BMW',
        'year' => '1997',
        'model' => '320',
        'color' => 'black',
    ],
];

echo '<table border="1">';

echo '<th>Marke</th>';
echo '<th>Modelis</th>';
echo '<th>Metai</th>';
echo '<th>Spalva</th>';


foreach ($autos as $auto) {
    if ($auto['color'] === 'blue') {
        echo '<tr>';
        echo '<td>' . $auto['brand'] . '</td>';
        echo '<td>' . $auto['model'] . '</td>';
        echo '<td>' . $auto['year'] . '</td>';
        echo '<td>' . $auto['color'] . '</td>';
        echo '</tr>';
    }
}

echo '</table>';