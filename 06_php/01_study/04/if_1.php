<?php

echo '年齢を入力して下さい: ';
$age = trim(fgets(STDIN));

if ($age >= 18) {
    echo 'あなたは成人です';
}
