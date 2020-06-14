<?php
include("functions.php");

$search_word = $_GET["serchword"];

$pdo = connect_to_db();

$sql = "SELECT * FROM todo_table WHERE todo LIKE '%{$search_word}%'";

$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($result);
  exit();
}
