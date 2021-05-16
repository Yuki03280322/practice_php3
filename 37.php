<?php
while($line = fgets(STDIN)) {
  $tmp[] = trim($line);
}

foreach($tmp as $value) {
  $array[] = explode(" ", $value);
}

$math = $array[0];

$check = array();
for($x = 1; $x <= $math[0]; $x++) {
  array_push($check, $array[$x]);
}
foreach($check as $key => $val) {
  foreach($val as $v) {
    $slice = str_split($v);
    $slice_check[] = $slice;
  }
}
foreach($slice_check as $key => $val) {
  foreach($val as $v) {
    $new_check[] = $v;
  }
}

$panel = array();
for($y = $x; $y < $math[0] + $x; $y++) {
  array_push($panel, $array[$y]);
}
foreach($panel as $key => $val) {
  foreach($val as $v) {
    $new_panel[] = $v;
  }
}

$count = 0;
$judge_num = $math[0] * $math[1];
for($z = 0; $z <= $judge_num; $z++) {
  if(strpos($new_check[$z], 'o') !== false) {
    $count += $new_panel[$z];
  }
}

echo $count;

?>

<!--
ストラックアウト

4 3
oxo
oox
oxo
xxx
1 2 3
4 5 6
7 8 9
10 11 12

29
 -->

