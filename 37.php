<?php
while($line = fgets(STDIN)) {
  $tmp[] = trim($line);
}

foreach($tmp as $value) {
  $array[] = explode(" ", $value);
}

$math = $array[0];

$check = array();
for($i = 1; $i <= $math[0]; $i++) {
  array_push($check, $array[$i]);
}
foreach($check as $key1 => $val1) {
  foreach($val1 as $v1) {
    $new_check[] = $v1;
  }
}

$panel = array();
for($a = $i; $a < $math[0] + $i; $a++) {
  array_push($panel, $array[$a]);
}
foreach($panel as $key2 => $val2) {
  foreach($val2 as $v2) {
    $new_panel[] = $v2;
  }
}

$count = 0;
$judge_num = $math[0] * $math[1];

$num = 0;
foreach($new_check as $key3 => $val3) {
  if($val3 == "○") {
    echo $val3;
  }
}

// print_r($new_check);
// print_r($new_panel);


?>

<!-- ストラックアウト（途中） -->