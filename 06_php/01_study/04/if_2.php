<?php

$age = 18;
$str_age = '18';

if ($age == $str_age) {
    echo '一致します' . PHP_EOL;
}

// 厳密演算子
// int型の$ageとstring型の$str_ageを比較
// データ型が異なるので、18と'18'は別物と判定されるので、何も出力されない
if ($age === $str_age) {
    echo '一致します' . PHP_EOL;
}
