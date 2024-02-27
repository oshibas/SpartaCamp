<?php

$dice = [1, 2, 3, 4, 5, 6];

// 配列をシャッフルする
shuffle($dice);

foreach ($dice as $value) {
    if ($value % 2 == 0) {
        continue; // 偶数の時に、現在の反復処理を抜ける
    }
    echo $value . PHP_EOL;
}
