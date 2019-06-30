<?php

declare(strict_types = 1);

$products = [
    [
        'title' => 'Products1',
        'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.',
        'price' => 4.34,
    ],
    [
        'title' => 'Products2',
        'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.',
        'price' => 6.55,
    ],
    [
        'title' => 'Products3',
        'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.',
        'price' => 12.4,
    ],
    [
        'title' => 'Products4',
        'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.',
        'price' => 8.4,
    ],
    [
        'title' => 'Products5',
        'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.',
        'price' => 46.1,
    ],
    [
        'title' => 'Products6',
        'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.',
        'price' => 99.2,
    ],
    [
        'title' => 'Products7',
        'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.',
        'price' => 55,
    ],
    [
        'title' => 'Products8',
        'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.',
        'price' => 14.15,
    ],
];

// Padaryti produktu atvaizdavima kur eiluteje butu po tris produktus
// Kieviena products deti div elementa
// Po kiekvieno trecio elemento naudoti <br> kad nukeltu i sekancia eilute


echo '<div style="position: relative; width: 100%;">';

$i = 1;

foreach ($products as $product) {
    
    echo '<div style="float: left; width:200px; padding: 5px; ">';
    echo '<p>' . $product['title'] . '</p>';
    echo '<p>' . substr($product['description'], 0) . '</p>';
    echo '<p>'. 'price: ' . $product['price'] . '</p>';
    echo '</div>'; 

    $div = $i % 3;
    if($div == 0){
        echo '<br>';
    }
    $i++;
}

echo '</div>';