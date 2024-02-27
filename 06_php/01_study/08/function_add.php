<?php 

function add($a, $b)
{
    return $a + $b;
}

echo add(2, 3);
echo PHP_EOL;

function get_circle_area($radius)
{
    return $radius * $radius * pi();
}

echo get_circle_area(5);

echo PHP_EOL;
