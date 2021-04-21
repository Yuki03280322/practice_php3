<?php
function num($num1, $num2, $num3) {
  $addition = $num1 + $num2;
  if ($num3 < 4) {
    echo $addition / $num3."\n";
  } else {
    echo $addition * $num3."\n";
  }
}

num(1,2,3);
num(4,5,6);
?>

<!-- メソッド作成 -->