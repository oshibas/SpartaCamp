<?php

require_once 'max_array_functions.php';

// range関数は引数の1〜100までの配列を作成する関数
$nums = range(1, 100);
// shuffle関数で配列の要素を入れ替える
shuffle($nums);

echo max_array($nums); // 100 が出力されるようにする
