<?php
$num1 = '';
$num2 = '';
$num3 = '';
$numError = '';      // エラーメッセージ

// フォームが送信された場合の処理
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1']; // フォームから数字を取得
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    // すべてが未入力の場合、エラーメッセージを設定
    if (empty($num1) && empty($num2) && empty($num3)) {
        $numError = '全てに数字を入力してください。';
    // 1つ以上が未入力の場合も、エラーメッセージを設定
    // } elseif (empty($num1) || empty($num2) || empty($num3)) {
    //     $numError = '全てに数字を入力してください。';
    }
}
?>

    <!-- 数字の出力 -->
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($numError)) : ?> 

    <!-- && $num1 !== '' && $num2 !== '' && $num3 !== ''): ?> -->
        <div>
            <!-- intval()関数は、文字列を整数に変換する関数 -->
            合計値は<?= htmlspecialchars(intval($num1) + intval($num2) + intval($num3), ENT_QUOTES) ?>です
        </div>
    <?php endif ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>複数のフォーム</title>
</head>
<body>
    <h1>数字を入力してください</h1>

    <form action="" method="post">
        <div>
            <label for="num1">1つめの数字</label><br>
            <input type="number" name="num1" id="num1" value="<?= htmlspecialchars($num1, ENT_QUOTES, 'UTF-8') ?>">
            <?php if (!empty($numError)): ?>
                <p><?= htmlspecialchars($numError, ENT_QUOTES, 'UTF-8') ?></p>
            <?php endif ?>
        </div>

        <div>
            <label for="num2">2つめの数字</label><br>
            <input type="number" name="num2" id="num2" value="<?= htmlspecialchars($num2, ENT_QUOTES, 'UTF-8') ?>">
        </div>

        <div>
            <label for="num3">3つめの数字</label><br>
            <input type="number" name="num3" id="num3" value="<?= htmlspecialchars($num3, ENT_QUOTES, 'UTF-8') ?>">
        </div>

        <div>
            <input type="submit" value="送信">
        </div>
    </form>
</body>
</html>
