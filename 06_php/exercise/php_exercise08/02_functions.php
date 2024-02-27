<?php

function calc_calorie($total_meals) 
{
    $total_cal = array_sum($total_meals);
    return "摂取カロリー合計は{$total_cal}kcalです";
}
