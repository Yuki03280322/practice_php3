<?php
$array = array(1,3,4,6,9,10,13,20,26,31);
echo "検索したい数字を入力してください\n";
$num = trim(fgets(STDIN));

function binary_search($array,$num) {
  $array_count = count($array);
  $left = 0;
  $right = $array_count - 1;
  while($left <= $right) {
    $center = floor(($left + $right) / 2);
    if($array[$center] == $num) {
      return $center;
    } elseif($array[$center] < $num) {
      $left = $center + 1;
    } else {
      $right = $center - 1;
    }
  }
  return -1;
}
$result = binary_search($array,$num);
if($result == -1) {
  echo $num. "は配列内に存在しません\n";
} else {
  echo $num. "は配列の". ($result + 1). "番目に存在します\n";
}
?>