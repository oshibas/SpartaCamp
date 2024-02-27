<?php 
$date = '';
$week = ['日', '月', '火', '水', '木', '金', '土'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = date('Y年m月d日') . $week[date('w')];
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (empty($date)) : ?>
        <h2>本日の日付、曜日を確認しますか？</h2>
        <form action="" method="post">
            <input type="submit" value="はい">
        </form>
    <?php else : ?>
        <h1>今日は、<?= $data ?>曜日です</h1>
        <a href="">戻る</a>
    <?php endif; ?>
</body>
</html>
