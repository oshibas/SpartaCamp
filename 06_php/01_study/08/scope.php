<?php

require_once 'scope_functions.php';

$sum = 100;

// 関数呼び出し
add(2, 3);

// Undefined variable $sum と表示され、var_dumpの結果としてNULLと表示される
var_dump($sum);
