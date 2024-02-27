<?php

// テストの合計点により合否を判定するプログラム
// 各科目の内訳も確認することが出来る

$scores = [
    '国語' => 70,
    '数学' => 50,
    '英語' => 30,
];

$total_score = array_sum($scores); // 配列の要素の合計値を算出

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>埋め込み</title>
</head>

<body>
    <h1>採点結果</h1>

    <?php if ($total_score >= 210): ?>
        <h2>合格</h2>
    <?php else: ?>
        <h2>不合格</h2>
    <?php endif; ?>

    <h1>得点の内訳</h1>
    <p>合計: <?= $total_score ?>点</p>
    <ul>
        <?php foreach ($scores as $subject => $score): ?>
            <li><?= $subject . ' ' . $score ?>点</li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
