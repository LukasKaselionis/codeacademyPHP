<?php 

$array = [
    [
        'time' => 1561045771,
        'price' => 2.45,
    ],
    [
        'time' => 1561045781,
        'price' => 2.48,
    ],
    [
        'time' => 1561046783,
        'price' => 2.50,
    ],
    [
        'time' => 1561046791,
        'price' => 2.41,
    ],
    [
        'time' => 1561046793,
        'price' => 2.55,
    ],
    [
        'time' => 1561046799,
        'price' => 2.12,
    ],
    [
        'time' => 1561046803,
        'price' => 2.51 ,
    ],
];

$fromTimeStamp = null;
$toTimeStamp = null;

$prices = [];
$maxPrice = null;

foreach ($array as $point) {
    $add = true; 
    if ($fromTimeStamp !== null && $fromTimeStamp > $point['time']){
        $add = false;
    }
    if ($toTimeStamp !== null && $toTimeStamp > $point['time']){
        $add = false;
    }
    // if ($fromTimeStamp <= $point['time'] && $toTimeStamp >= $point['time']) {}
    if($add) {
        $prices[] = $point['price'];
    }
}

print_r($prices);

if (!empty($prices)){
    $maxPrice = max($prices);
}

var_dump($maxPrice);

echo $maxPrice;
echo '<br>';

// -----------------------------------------------

$timeStamp = 1561045771;
$step = 60;

$roundedTimestamp = (int)(floor($timeStamp / $step) * $step);

echo $roundedTimestamp;
echo '<br>';

$groupedData = [];
foreach ($array as $point) {
    $roundedTimestamp = (int)(floor($point['time'] / $step) * $step);

    $groupedData[$roundedTimestamp][] = $point['price'];
}

echo '<pre>';
print_r($groupedData);
echo '<pre>';

foreach ($groupedData as &$point) {
    $point = round(array_sum($point) / count($point), 2);
}

echo '<pre>';
print_r($groupedData);
echo '<pre>';

foreach ($array as $key => &$point) {
    $point['name'] = 'Point: '. $key;
}

echo '<pre>';
print_r($array);
echo '<pre>';