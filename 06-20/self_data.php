<?php

$twitterPostCount = [
    [
        'timestamp' => 1561045771,
        'count' => 3,
    ],
    [
        'timestamp' => 1561045571,
        'count' => 4,
    ],
    [
        'timestamp' => 1561045971,
        'count' => 3,
    ],
    [
        'timestamp' => 1561045471,
        'count' => 2,
    ],
    [
        'timestamp' => 1561045371,
        'count' => 0,
    ],
    [
        'timestamp' => 1561045671,
        'count' => 5,
    ],
    [
        'timestamp' => 1561048771,
        'count' => 1,
    ],
];

$timestamp = 1561045771;
$step = 60 * 60;


$groupData = [];
foreach ($twitterPostCount as $point) {
    $roundedTimestamp = (int)(floor($point['timestamp'] / $step) * $step);
    $groupData[$roundedTimestamp] = $point['count'];
}

echo '<pre>';
print_r($groupData);
echo '<pre>';