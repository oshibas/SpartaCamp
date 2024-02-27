<?php

require_once __DIR__ . '/User.php';

$bob = new User('bob', 20, '岩手県');
echo $bob->selfIntroduction();
