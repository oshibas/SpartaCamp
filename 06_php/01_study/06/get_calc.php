<?php

$num1 = '';
$num2 = '';
$sum = '';

if ($_SERVER['REQUEST_METHOD']) {
    $num1 = filter_input(INPUT_GET, 'num1');
    $num2 = filter_input(INPUT_GET, 'num2');
    $sum = $num1 + $num2;
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
    <form action="" method="get">
        <label for="">値1</label>
        <br>
        <input type="number" name="num1" id="">
        <br>
        <label for="">値2</label>
        <br>
        <input type="number" name="num2" id="">
        <br>
        <input type="submit" value="計算">
    </form>
    <?php if (!empty($sum)): ?>
        <h2>計算結果</h2>
        <p><?= htmlspecialchars($sum, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>
</body>

</html>
