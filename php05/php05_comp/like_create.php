<?php

// var_dump($_GET);
// exit();

include('functions.php');

$user_id = $_GET['user_id'];
$todo_id = $_GET['todo_id'];

$pdo = connect_to_db();

// 良いね数のカウント
$sql = 'SELECT COUNT(*) FROM like_table WHERE user_id=:user_id AND todo_id=:todo_id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
$stmt->bindValue(':todo_id', $todo_id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
  // エラー処理
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  $like_count = $stmt->fetch();
  // var_dump($like_count[0]);    // データの件数を確認しよう！
  // exit();
}

if ($like_count[0] != 0) {
  $sql = 'DELETE FROM like_table WHERE user_id=:user_id AND todo_id=:todo_id';
} else {
  $sql = 'INSERT INTO like_table(id, user_id, todo_id, created_at) VALUES(NULL, :user_id, :todo_id, sysdate())';
}

// $sql = 'INSERT INTO like_table(id, user_id, todo_id, created_at) VALUES(NULL, :user_id, :todo_id, sysdate())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
$stmt->bindValue(':todo_id', $todo_id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
  // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  header('Location:todo_read.php');
  exit();
}
