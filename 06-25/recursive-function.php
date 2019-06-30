<?php

declare(strict_types = 1);

$menu = [
    [
        'title' => 'Home',
        'link' => '',
    ],
    [
        'title' => 'About us',
        'link' => 'about-as',
    ],
    [
        'title' => 'Products',
        'link' => 'Products',
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

function makeMenu(array $menu): ?string {
    if(empty($menu)){
        return null;
    }

    $menuString = '';
    $menuString .= '<ul>';

    foreach ($menu as $item) {
        if (!isset($item['link']) || !isset($item['title'])) {
            continue;
        }
        $menuString .= '<li>';
        $menuString .= '<a href="' . $item['link'] . '">' . $item['title'] . '</a>';

        if (isset($item['submenu'])) {
            $menuString .= makeMenu($item['submenu']);
        }
        $menuString .= '</li>';
    }

    $menuString .= '</ul>';

    return $menuString;
}

echo makeMenu($menu);
