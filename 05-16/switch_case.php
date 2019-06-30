<?php

declare(strict_types = 1);

$type = 'two';

$number = 0;

if($type == 'one'){
    $number = 1;
} elseif ($type == 'two'){
    $number = 2;
} elseif ($type == 'three'){
    $number = 3;
} elseif ($type == 'four'){
    $number = 4;
}

switch($type){
    case 'one': 
    $number = 1;
    break;
    case 'two': 
    $number = 2;
    break;
    case 'three': 
    $number = 4;
    break;
    case 'four': 
    $number = 4;
    break;
}

$yourBank = 'seb';  

switch($yourBank){
    case 'swed':
        $bankName = "Swedbank";
        break;
    case 'citadele':
        $bankName = "Citadele";
        break;
    case 'seb':
        $bankName = "SEB";
        break;
}

echo $bankName;