<?php

require_once '02_functions.php';

$yesterday_meal = [
    '食パン' => 300, 
    'ステーキ' => 1200, 
    'うどん' => 500
];

$today_meal = [
    'シリアル' => 200, 
    'とんかつ' => 1000,
    'パスタ' => 400
];

$total_meals = array_merge($yesteerday_meal, $today_meal);

echo calc_calorie($total_meals);
