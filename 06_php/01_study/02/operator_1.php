<?php

$a = 6;
$b = 2;

$sum  = $a + $b; // 和: summation
$diff = $a - $b; // 差: difference
$pro  = $a * $b; // 積: product
$quo  = $a / $b; // 商: quotient
$rem  = $a % $b; // 余: remainder

echo "{$a} + {$b} = {$sum}" . PHP_EOL;
echo "{$a} - {$b} = {$diff}" . PHP_EOL;
echo "{$a} × {$b} = {$pro}" . PHP_EOL;
echo "{$a} ÷ {$b} = {$quo}" . PHP_EOL;
echo "{$a} ÷ {$b} の余りは {$rem}";
