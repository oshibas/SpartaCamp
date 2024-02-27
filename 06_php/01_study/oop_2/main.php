<?php

require_once __DIR__ . '/User.php';

$bob = new User('Bob', 20);
echo $bob->selfIntroduction();

$tom = new User('Tom', 21);
echo $tom->selfIntroduction();

$ken = new User('Ken', 22);
echo $ken->selfIntroduction();
