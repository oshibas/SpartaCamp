<?php

function get_greeting($time_zone)
{
    $greetings = [
        '朝' => 'おはよう',
        '昼' => 'こんにちは',
        '夜' => 'こんばんは'
    ];
    
    return "{$time_zone}の挨拶は{$greetings[$time_zone]}";
}
