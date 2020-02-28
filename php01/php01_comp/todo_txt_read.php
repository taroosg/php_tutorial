<?php
// 読み込みたいファイル名を指定
$file_name = "data/todo.txt";
// ファイルを開く処理
$file = new SplFileObject($file_name, "rb");
// ファイルロックの処理
$file->flock(LOCK_EX);
// 出力用の文字列（ここに読み込んだデータをタグに入れた形式で追加していく）
$str = "";
// ファイル書き込み処理
// 1行づつ取り出す
foreach ($file as $row) {
  // 出力用の文字列に追加
  $str .= "<tr><td>{$row}</td></tr>";
}
// ファイルアンロックの処理
$file->flock(LOCK_UN);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>textファイル書き込み型todoリスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>textファイル書き込み型todoリスト（一覧画面）</legend>
    <a href="todo_txt_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>todo</th>
        </tr>
      </thead>
      <tbody>
        <?= $str ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>