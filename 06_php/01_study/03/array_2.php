<?php

// 配列の中に文字列、数値
// 配列の中に配列(多次元配列)
$profile = [
    'Bob',
    21,
    [
        'Tom',
        'Ken',
        'John'
    ]
];

echo $profile[0] . PHP_EOL;
echo $profile[1] . PHP_EOL;
// $profile[2]で取り出した配列に対してインデックスを指定する
echo $profile[2][0] . PHP_EOL;
echo $profile[2][1] . PHP_EOL;
echo $profile[2][2];
