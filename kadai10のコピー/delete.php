<?php
$id = $_GET['id'];

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

// UPDATE テーブル名 SET カラム1= 1に保存したいもの、カラム2= 2に保存したいもの,, WHERE 条件 id=送られてきたid
$stmt = $pdo->prepare('DELETE FROM kadai_table WHERE id = :id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //PARAM_INTなので注意

$status = $stmt->execute(); //実行


//３．データ表示
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    header('Location: select.php');
    exit();
}

// var_dump($result);

?>


