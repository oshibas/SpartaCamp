<?php
// error_reporting(E_ALL);
// var_dump($_POST);

// URLパラメータから名前を取得
$name = $_GET['name'] ?? '';

if (empty($name)) {
    $nameError = '名前が未入力です';
} else {
    // 名前が入力されている場合はエラーメッセージをクリア
    $nameError = '';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>出力結果 フォームの作成2</title>
</head>
<body>
    <?php if (empty($nameError)): ?>
        <div>
            私の名前は<?= htmlspecialchars($name, ENT_QUOTES) ?>です
        </div>
    <?php else: ?>
        <div>
            <?= htmlspecialchars($nameError, ENT_QUOTES) ?>
        </div>
    <?php endif ?>
</body>
</html>
