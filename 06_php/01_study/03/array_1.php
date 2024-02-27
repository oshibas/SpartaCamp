<?php

# PHP5.4以降
$members = ['Bob', 'Tom', 'Ken'];

# PHP5.3以前
# $members = array('Bob', 'Tom', 'Ken');


echo $members[0] . PHP_EOL;
echo $members[1] . PHP_EOL;
echo $members[2] . PHP_EOL;

echo $members; // これでは Array と表示されるだけ
