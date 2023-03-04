<?php

// 課題1    
function call($x) {
    return $x *2;
}
    $result = call(30);
    echo $result."\n";

// 課題2    
function add($a, $b) {
    return ($a + $b);
}
    $result = add(10, 15);
    echo $result."\n";

// 課題3
function num($arr_1) {
    return array_product($arr_1);
}
    $arr_1 = array(1, 3, 5, 7, 9);
    $result = num($arr_1);
    echo $result."\n";

// 課題4
$arr = array(10, 5, 60, 80, 50);
function max_array($arr) {
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a) {
    // ここで配列の中の1番大きい値を探したい
    if ($max_number < $a) {
        $max_number = $a;
        }
  }
  return $max_number;
}
  $result = max_array($arr);
  echo $result."\n";