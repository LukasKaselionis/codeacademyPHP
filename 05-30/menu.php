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

    
    echo '<ul>';

    foreach ($menu as $item) {
        echo '<li>';
        echo '<a href="' . $item['link'] .'">' . $item['title'].'</a>';
        
        // submenu start
        if(isset($item['submenu']) && !empty($item['submenu'])) {
            echo '<ul>';
            foreach ($item['submenu'] as $submenu) {
                echo '<li>';
                echo '<a href="' .$item['link'] . '/' . $submenu['link'] .'">' . $submenu['title'].'</a>';
                echo '</li>';
            }
            echo '</ul>';
        }
        echo '</li>';
    }

    echo '</ul>';