<?php

echo 'start or stop を入力: ';
$msg = trim(fgets(STDIN));

if ($msg === 'start') {
    echo 'start' . PHP_EOL;
} else {
    echo 'exit';
    exit;
}

echo 'end';
