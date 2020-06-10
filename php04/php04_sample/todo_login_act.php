<?php
// var_dump($_POST);
// exit();

// 外部ファイル読み込み

// DB接続します

// データ受け取り

// データ取得SQL作成&実行
$sql = '';

// SQL実行時にエラーがある場合はエラーを表示して終了

// うまくいったらデータ（1レコード）を取得
$val = $stmt->fetch(PDO::FETCH_ASSOC);

// ユーザ情報が取得できない場合はメッセージを表示
if (!$val) {
  echo "<p>ログイン情報に誤りがあります．</p>";
  echo '<a href="todo_login.php">login</a>';
  exit();
} else {
  // ログインできたら情報をsession領域に保存して一覧ページへ移動

}
