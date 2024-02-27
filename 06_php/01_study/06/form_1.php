<?php

$msg = '';

// var_dump($_SERVER);
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $msg = $_POST['message'];
} 
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォームの練習</title>
</head>
<body>
    <h1>POSTメソッド</h1>
    <form action="" method="post">
        <div>
            <label for="">メッセージ</label>
            <br>
            <input type="text" name="message">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <p><?= $msg ?></p>
</body>
</html>
