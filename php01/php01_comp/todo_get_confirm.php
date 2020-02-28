<?php
// データを受け取ると，受け取ったデータを元に処理を実行し，htmlのデータを返す
// まずデータの受取を確認
// var_dump($_GET);
// exit();
// ↑exit()関数は以降の処理を中止する関数

// name属性の値を指定してデータを受け取る
$todo = $_GET["todo"];
$deadline = $_GET["deadline"];

// 上記の変数をhtmlに埋め込んで表示する

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>todo表示画面（GET）</title>
</head>

<body>
  <fieldset>
    <legend>todo表示画面（GET）</legend>
    <table>
      <thead>
        <tr>
          <th>todo</th>
          <th>deadline</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?= $todo ?></td>
          <td><?= $deadline ?></td>
        </tr>
      </tbody>
    </table>
  </fieldset>
</body>

</html>