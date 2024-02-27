<?php

$members = ['Bob', 'Tom', 'Ken', 'John'];

$members[1] = 'Michael'; // 変更

$members[] = 'Daniel'; // 最後の要素に追加(良く使う)

print_r($members);

echo str_repeat("-", 20) . PHP_EOL;

// ちなみに
$members[50] = 'SKIP'; // キーを連番にしないことも可能
$members[]   = 'TAIL'; // 末尾のキーに1を加えたキーになる。51のキー。
print_r($members);
