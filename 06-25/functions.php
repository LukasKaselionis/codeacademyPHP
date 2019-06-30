<?php

declare(strict_types = 1);

/**
 * Functions
 */

function makeMenu(array $menu): ?string {
    if(empty($menu)){
        return null;
    }

    $menuString = '';
    $menuString .= '<ul>';

    foreach ($menu as $item) {
        $menuString .= makeMenuItem($item);
    }

    $menuString .= '</ul>';

    return $menuString;
}

function makeMenuItem(array $menuItem): string {

    $menuString = '';
    if(!isset($menuItem['link']) || !isset($menuItem['title'])){
        return $menuString;
    }
        $menuString .= '<li>';
        $menuString .= '<a href="' . $menuItem['link'] . '">' . $menuItem['title'] . '</a>';

        if(isset($menuItem['submenu'])) {
            $menuString .= makeMenu($menuItem['submenu']);
        }

        $menuString .= '</li>';

    return $menuString;
}



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

$stringedMenu = makeMenu($menu);

echo $stringedMenu;
