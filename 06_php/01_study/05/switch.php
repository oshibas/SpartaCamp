<?php

echo '$hourの値を入力して下さい: ';
$hour = trim(fgets(STDIN));

switch ($hour) {
    case '6':
        echo 'おはようございます' . PHP_EOL;
        break;
    case '12':
        echo 'こんにちは' . PHP_EOL;
        break;
    case '18':
        echo 'こんばんは' . PHP_EOL;
        break;
    default:
        echo 'ハロー' . PHP_EOL;
        break;
}

echo str_repeat("-", 20) . PHP_EOL;

// if文で書くと...
if ($hour === '6') {
    echo 'おはようございます' . PHP_EOL;
} elseif ($hour === '12') {
    echo 'こんにちは' . PHP_EOL;
} elseif ($hour === '18') {
    echo 'こんばんは' . PHP_EOL;
} else {
    echo 'ハロー' . PHP_EOL;
}
