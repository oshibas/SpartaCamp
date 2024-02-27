<?php

$name = '';
$age = '';
$err_msgs = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_input(INPUT_POST, 'name');
    $age = filter_input(INPUT_POST, 'age');

    if (empty($name)) {
        $err_msgs[] = '氏名を入力して下さい';
    }

    if (empty($age)) {
        $err_msgs[] = '年齢を入力して下さい';
    }

    if (empty($err_msgs)) {
        header('Location: thankyou.php');
        exit;
    }
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
    <h1>個人情報送信</h1>
    <?php if (!empty($err_msgs)): ?>
        <ul>
            <?php foreach ($err_msgs as $err_msg): ?>
                <li><?= $err_msg ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="" method="post">
        <div>
            <label for="name">氏名</label><br>
            <input type="text" name="name" id="name" value="<?= $name ?>">
        </div>
        <div>
            <label for="age">年齢</label><br>
            <input type="number" name="age" id="age" value="<?= $age ?>">
        </div>
        <div class="submit">
            <input type="submit" value="送信">
        </div>
    </form>
</body>

</html>
