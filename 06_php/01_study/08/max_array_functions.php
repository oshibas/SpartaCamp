<?php

function max_array($nums)
{
    // [3, 99, 21, 100, 56, ...]
    $max_value = $nums[0];

    foreach ($nums as $num) {
        if ($max_value < $num) {
            $max_value = $num;
        }
    }

    return $max_value;
} 
