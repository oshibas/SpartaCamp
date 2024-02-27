<?php

echo '年齢を入力して下さい: ';
$age = trim(fgets(STDIN));

if ($age > 18) {
    // 18より大きいとき実行される
    echo 'あなたは成人です';
} elseif ($age == 18) {
    // 18のとき実行される
    echo '今年は成人式ですね';
} else {
    echo 'あなたは未成年です';
}
