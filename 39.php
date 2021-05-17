<?php
while($line = fgets(STDIN)) {
  $tmp[] = trim($line);
}

foreach($tmp as $value) {
  $array[] = explode(" ", $value);
}

$box_number = $array[0][0];
$ball_weight = $array[0][1] * 2;
unset($array[0]);

$result = array();
foreach($array as $key => $nums) {
  $count = 0;
  foreach($nums as $keys => $num) {
    if($num >= $ball_weight) {
      $count += 1;
    }
  }
  if($count == 3) {
    $ok = array_keys($array, $nums);
    array_push($result, $ok);
  }
}

foreach($result as $key => $val) {
  foreach($val as $v) {
    echo $v. "\n";
  }
}
?>

<!--
ボールの入る箱

4 2
6 6 6
4 6 4
6 1 1
4 4 4

1
2
4
 -->