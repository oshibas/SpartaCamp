<?php

// 処理が実行されない
$i = 0;
while ($i > 10) {
    echo $i . PHP_EOL;
    $i++;
}

echo str_repeat("-", 20) . PHP_EOL;

// 1回処理が実行される
$j = 0;
do {
    echo $j . PHP_EOL;
    $j++;
} while ($j > 10);
