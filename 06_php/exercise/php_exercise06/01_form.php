<?php
$age = '';           // 年齢の初期化
$ageError = '';      // エラーメッセージの初期化

// フォームが送信された場合の処理
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age = $_POST['age']; // フォームから年齢を取得

    // 年齢が未入力の場合、エラーメッセージを設定
    if (empty($age)) {
        $ageError = '年齢が未入力です';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォームの作成</title>
</head>
<body>
    <h1>POSTメソッド</h1>

    <!-- 年齢入力フォーム
    actionの値に指定されたファイルにデータを渡す。
    値が""の場合は、自身と同じ名前のファイルにデータを送る。

    methodで指定した方式でデータを渡す。
    データを送信する場合(アカウント登録、ログイン画面等)は POST(postでも可)
    連想配列でデータが格納されている。
    name属性の値をキー、フォームに入力された値を要素としてデータを格納する。

    データを送信して別のデータを取得する場合(検索画面等)は GET(getでも可) -->
    <form action="" method="post">
        <div>
            <label for="age">年齢</label><br>
            <input type="number" name="age" id="age" value="<?= htmlspecialchars($age, ENT_QUOTES, 'UTF-8') ?>">
            <?php if (!empty($ageError)): ?>
                <ul><li><?= htmlspecialchars($ageError, ENT_QUOTES, 'UTF-8') ?></li></ul>
            <?php endif ?>
        </div>

        <div>
            <input type="submit" value="送信">
        </div>
        <br>
    </form>

    <!-- 年齢の出力 -->
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($ageError)): ?>
        <div>
        <!-- ENT_QUOTES 文字列内のクォート(' )をエスケープするオプション -->
            私は<?= htmlspecialchars($age, ENT_QUOTES) ?>歳です
        </div>
    <?php endif ?>
</body>
</html>
