<?php

declare(strict_types = 1);

/**
 * Turime automobiliu masyva, kuri sudaro
 * pavadinimas, modelis, pagaminimo metai, darbinis turis, galia.
 *
 * Parasyti funkcija, kuri i ekrana pagal nutylejima isvestu tik pavadinima ir modeli,
 * bet turi buti parametras pagal kuri isvestu pilnus duomenis.
 */

$autos = [
    [
        'title' => 'BMW',
        'model' => '530',
        'year' => '2000',
        'engine' => '3.0 L',
        'power' => '125kw',
    ],
    [
        'title' => 'Audi',
        'model' => 'A4',
        'year' => '2005',
        'engine' => '1.9 L',
        'power' => '103kw',
    ],
    [
        'title' => 'Volvo',
        'model' => 's60',
        'year' => '2002',
        'engine' => '2.4 L',
        'power' => '96kw',
    ],
    [
        'title' => 'Ford',
        'model' => 'Focus',
        'year' => '2006',
        'engine' => '2.2 L',
        'power' => '129kw',
    ],
];



function printAuto(array $autos,  bool $var = false){

    $autoString = '';
    $autoString .= '<ul>';

    foreach ($autos as $item) {
            $autoString .= makeAutoItem($item, $var);
    }

    $autoString .= '</ul>';

    return $autoString;
}

function makeAutoItem(array $autoItem, bool $var = false){
        $autoString = '';
        $autoString .= '<li>' . $autoItem['title'] . ' ' . $autoItem['model'] . '</li>';
        if ($var === true){
            $autoString .= '<li>' . $autoItem['year'] . ' ' . $autoItem['engine'] . ' ' . $autoItem['power'] .'</li>';
        }

    return $autoString;
}

echo printAuto($autos, false);


/**
 * ND 2.
 * --------------------------------------
 * papildyti ND 1. taip kad, butu funkcija su parametrais,
 * kuri paskaiciuotu seniausia, naujausia ir vidutini automobilio amziu is turimu duomenu.
 * Ar skaiciuoti kiekviena skaiciu turi buti nustatoma per optional parametrus
 * ir rezultatus isvesti i ekrana.
 */