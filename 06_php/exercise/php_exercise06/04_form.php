<?php
// クエリのパラメーターを取得後、変数に代入
// isset() 関数は変数がセットされているかを確認するために使用
// パラメーターが存在しない場合は空の文字列 '' になる
$num1 = isset($_GET['num1']) ? $_GET['num1'] : '';
$num2 = isset($_GET['num2']) ? $_GET['num2'] : '';
$operator = isset($_GET['operator']) ? $_GET['operator'] : '';

$result = '';
$message = '';

// swich文で演算子を判定
if ($num1 !== '' && $num2 !== '' && $operator !== ''){
// is_numeric() 関数は変数が数値かどうかを調べる
    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operator) {
            // 足し算
            case 'addition':
                $result = $num1 + $num2;
                $message = "$num1 + $num2 = $result";
                break;
            // 引き算
            case 'subtraction':
                $result = $num1 - $num2;
                $message = "$num1 - $num2 = $result";
                break;
            // 掛け算
            case 'multiplication':
                $result = $num1 * $num2;
                $message = "$num1 * $num2 = $result";
                break;
            // 割り算
            case 'division':
                if ($num2 != 0){
                    $result = $num1 / $num2;
                    $message = "$num1 / $num2 = $result";
                } else {
                    $message = "0で割ることはできません。";
                }
                break;
            default:
                $message = "正しい演算子を指定してください。";
        }
    } else {
        $message = "数値を入力してください。";
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETメソッド</title>
</head>
<body>
    <!-- フォーム部分 -->
    <form method="GET" action="">
    </form>

    <!-- 結果を表示 -->
    <?php
    if ($message !== '') {
        echo "<p>$message</p>";
    }
    ?>
</body>
</html>
