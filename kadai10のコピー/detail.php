<?php

/**
 * [ここでやりたいこと]
 * 1. クエリパラメータの確認 = GETで取得している内容を確認する
 * 2. select.phpのPHP<?php ?>の中身をコピー、貼り付け
 * 3. SQL部分にwhereを追加
 * 4. データ取得の箇所を修正。
 */
$id = $_GET['id'];

//2. DB接続します
//*** function化する！  *****************
try {
    $db_name = 'kadai08'; //データベース名
    $db_id   = 'root'; //アカウント名
    $db_pw   = ''; //パスワード：MAMPは'root'
    $db_host = 'localhost'; //DBホスト
    $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
} catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
}
//３．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM kadai_table WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //PARAM_INTなので注意
$status = $stmt->execute(); //実行


//３．データ表示
$result = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    $result = $stmt->fetch();
}

// var_dump($result);

?>
<!--
２．HTML
以下にindex.phpのHTMLをまるっと貼り付ける！
(入力項目は「登録/更新」はほぼ同じになるから)
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="update.php"に変更
※input要素 value="ここに変数埋め込み"
-->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <div class="container">
        <div>
            <h1 class="title">GENERATE</h1>
            <p class="text">テキスト生成結果</p>
        </div>
        <form method="POST" action="insert.php">
            <fieldset class="container">
                <label><textArea class="promptArea" name="prompt1"><?=$result['prompt1'] ?></textArea></label><br>
                <label><textArea class="generateArea" name="generate"><?=$result['generate'] ?></textArea></label><br>
                <input class="btn" name="submit2"  type="submit" value="更新">
            </fieldset>
        </form>
    </div>
</body>
</html>