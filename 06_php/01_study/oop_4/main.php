<?php
require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/Teacher.php';

$taro = new Teacher('田中', '太郎', 'ネクレボ高等学校');
echo $taro->selfIntroduction();
