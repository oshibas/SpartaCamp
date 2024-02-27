<?php

$keyword = '';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $keyword = filter_input(INPUT_GET, 'keyword');
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームの練習</title>
</head>

<body>
    <h1>GETメソッド</h1>
    <form action="" method="get">
        <div>
            <label for="">検索キーワード</label><br>
            <input type="text" name="keyword">
        </div>
        <div>
            <input type="submit" value="検索">
        </div>
    </form>
    <?php if (!empty($keyword)) :?>
        <div>
            <h2>検索キーワード</h2>
            <?= htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8') ?>
        </div>
    <?php endif; ?>
</body>
