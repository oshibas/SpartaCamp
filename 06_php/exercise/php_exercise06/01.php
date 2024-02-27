<?php
$num1 = '';
$num2 = '';
$num3 = '';
$numError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if (empty($num1) || empty($num2) || empty($num3)) {
        $numError = '全てに数字を入力してください。';
    } else if (!is_numeric($num1) || !is_numeric($num2) || !is_numeric($num3)) {
        $numError = '数字を入力してください。';
    }
}
?>

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

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($numError)): ?>
        <div>
            合計値は<?= htmlspecialchars(intval($num1) + intval($num2) + intval($num3), ENT_QUOTES) ?>です
        </div>
    <?php elseif (!empty($numError)): ?>
        <p><?= htmlspecialchars($numError, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif ?>
</body>
</html>
