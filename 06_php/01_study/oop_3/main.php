<?php

require_once __DIR__ . '/User.php';

$bob = new User('bob', 20);
echo $bob->selfIntroduction();

$bob->setName('Tom');
$bob->setAge(30);

echo $bob->getName();
echo PHP_EOL;

echo $bob->getAge();
echo PHP_EOL;

echo $bob->selfIntroduction();
