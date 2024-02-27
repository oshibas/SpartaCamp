<?php

$prices = [
    'apple'  => 150,
    'banana' => 200,
    'melon'  => 300
];

foreach ($prices as $key => $value) {
    echo $key . ' は ' . $value . ' 円です' . PHP_EOL;
}
