<?php

$dice = [1, 2, 3, 4, 5, 6];

// 配列をシャッフルする
shuffle($dice);

foreach ($dice as $value) {
    echo $value . PHP_EOL;
    if ($value == 1) {
        break; // 1が出たら、反復処理を終了する(foreachを抜ける)
    }
}
