<?php

require_once '01_functions.php';

echo 'タイムゾーンを 朝 or 昼 or 夜 で入力してください: ';
$time_zone = trim(fgets(STDIN));

echo get_greeting($time_zone);
