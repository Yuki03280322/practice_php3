<?php
echo "二桁の整数を入力してください\n";
$num = (int)fgets(STDIN);
function calculation($num) {
  $ten = ($num / 10) % 10;
  $one = ($num / 1) % 10;
  $result1 = $ten + $one;
  $result2 = $ten * $one;
  echo "足し算結果と掛け算結果の合計値は".($result1 + $result2)."です\n";
}
calculation($num);
?>