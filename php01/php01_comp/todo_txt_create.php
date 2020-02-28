<?php
// まずは送信データのチェック
// var_dump($_POST);
// exit();
$todo = $_POST["todo"];
$deadline = $_POST["deadline"];
// 書き込みデータの作成（スペース区切りで最後に改行コードを追加）
$write_data = "{$deadline} {$todo}\n";
// 書き込みたいファイル名を指定
$file_name = "data/todo.txt";
// ファイルを開く処理
$file = new SplFileObject($file_name, "ab");
// ファイルロックの処理
$file->flock(LOCK_EX);
// ファイル書き込み処理
$written = $file->fwrite($write_data);
// ファイルアンロックの処理
$file->flock(LOCK_UN);
// 結果によって条件分岐
if ($written === FALSE) {
  // エラー表示
  echo "エラー！！";
} else {
  // 入力画面へ移動
  header("Location:todo_txt_input.php");
}

// txtファイルへの書き込みのみ行うので表示する画面は存在しない
