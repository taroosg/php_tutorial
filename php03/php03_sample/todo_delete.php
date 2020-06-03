<?php

// 送信データのチェック
// var_dump($_GET);
// exit();

// 関数ファイルの読み込み


// 送信データ受け取り


// DB接続


// DELETE文を作成&実行
$sql = "";




// データ登録処理後
if ($status == false) {
  // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  // 正常にSQLが実行された場合は一覧ページファイルに移動し，一覧ページの処理を実行する


}
