<?php

require_once __DIR__ . '/User.php';

$user = new User();

//echo $user->name;
$user->name = 'Tom';
//echo $user->name;

echo $user->selfIntroduction();

echo PHP_EOL;
