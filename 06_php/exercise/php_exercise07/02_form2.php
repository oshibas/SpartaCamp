<?php

$score = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = $_POST['score'];
    if (empty($score)) {
        $err_msg = '点数が入力されていません。';
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <!-- 点数が入力されている場合 -->
    <?php if ($score !== ''): ?> 
        <?php if (isset($err_msg)): ?>
            <p><?= htmlspecialchars($err_msg, ENT_QUOTES) ?></p>
        <?php endif ?>
        <?php if ($score >= 60): ?>
            <h1>合格です。</h1>
        <?php else: ?>
            <h1>不合格です。</h1>
        <?php endif ?>
    <?php else: ?>
        <h1>点数を入力してください</h1>
    <?php endif ?>

    <form action="" method="post">
        <input type="number" name="score">
        <input type="submit" value="送信">
    </form>
</body>

</html>
