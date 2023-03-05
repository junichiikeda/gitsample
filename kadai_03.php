<?php

// 課題1
$name = "池田太郎";
if ($name == "池田淳一") {
    echo "池田淳一です" ."\n";
} else {
    echo "池田淳一ではありません"."\n";
}

// 課題1
$name = "池田淳一";
switch ($name) {
  case "池田淳一":
    echo "池田淳一です" ."\n";
    break;
  default;
    echo "池田淳一ではありません" ."n";
    break;
}

// 課題2
$total = 0;
for ($i = 1; $i <=10000; $i++) {
    $total +=$i;
}
echo $total ."\n";

// 課題3
$fruites = array("apple", "orange", "lemon", "grape", "tomato");
foreach ($fruites as $fruite) {
    echo $fruite; 
    echo "\n";
}

// 課題4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++) {

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0) {
    echo $i ."\n";
  }
}