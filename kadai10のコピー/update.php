<?php

//1. POSTデータ取得
$prompt1 = $_POST['prompt1'];
$generate = $_POST['generate'];

//2. DB接続します
try {
//ID:'root', Password: xamppは 空白 ''
$pdo = new PDO('mysql:dbname=kadai08;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
exit('DBConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成

// 1. SQL文を用意
$stmt = $pdo->prepare("INSERT INTO kadai_table(
                                                id,date,prompt1,generate
                                            )VALUES(
                                                NULL, sysdate(), :prompt1, :generate
                                            )");

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR

$stmt->bindValue(':prompt1', $prompt1, PDO::PARAM_STR);
$stmt->bindValue(':generate', $generate, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status === false){
//SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
$error = $stmt->errorInfo();
exit('ErrorMessage:'.$error[2]);
}else{
//５．(登録が成功した時の処理) index.phpへリダイレクト
// header("Location:ai.php");
}

?>