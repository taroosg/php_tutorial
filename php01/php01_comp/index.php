<?php

// 変数の定義は$必須
// 行末には「;」必須
$number = 100;
$str = "はじめてのPHP";

// 数値始まりはNG
// $1test = 10;

// echoで出力できる
echo $number;

// 文字列と変数の組み合わせ
echo  "今日の講義は{$str}です！";

// 配列
// $array[0]などで取得可能
$array1 = ["JavaScript", "PHP", "Swift", "Haskell"];

// キー名を指定することもできる（jsのオブジェクト的な感じ）
// $array2["サーバ"]などで取得可能
$array2 = [
  "フロント" => "JavaScript",
  "サーバ" => "PHP",
  "iOS" => "Swift",
  "関数型" => "Haskell"
];

// 変数や配列のデータを出力できる`var_dump()`関数
var_dump($array2);

// PHPの終了タグは省略可能
