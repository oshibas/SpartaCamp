<?php
$name = '';           // 名前の初期化
$nameError = '';      // エラーメッセージ

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // フォームから名前を取得＆空白を削除
    $name = isset($_POST['name']) ? trim($_POST['name']) : ''; 

    // 名前が未入力の場合、エラーメッセージを設定
    if (empty($name)) {
        $nameError = '名前が未入力です';
    } else {
        // 名前が入力されている場合、結果ページへリダイレクト
        // /?name= は、URLパラメーターで、URLにデータを含めることができる
        // urlencode()関数は、URLに含めることができない文字をエンコードする関数
        header('Location: 02_result.php?name=' . urlencode($name));
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォームの作成2</title>
</head>
<body>
    <!-- 名前入力フォーム -->
    <form action="" method="post">
        <div>
            <label for="name">名前</label><br>
            <input type="text" placeholder="名前を入力して下さい" name="name" id="name" value="<?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>">
            <?php if (!empty($nameError)): ?>
                <ul><li><?= htmlspecialchars($nameError, ENT_QUOTES, 'UTF-8') ?></li></ul>
            <?php endif ?>   
        </div>

        <div>
            <input type="submit" value="送信">
        </div>
    </form>
</body>
</html>
